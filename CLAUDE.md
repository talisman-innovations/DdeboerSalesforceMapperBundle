# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is a Symfony bundle that provides object-oriented, transparent access to Salesforce data via SOAP API. It maps Salesforce objects (like Opportunity, Account, Contact) to PHP domain models using Doctrine annotations.

## Key Commands

### Testing
```bash
phpunit
```
Tests are bootstrapped from `Tests/bootstrap.php` and located in the `Tests/` directory.

### Dependencies
```bash
composer install
composer update
```

## Architecture

### Core Components

**Mapper** (`Mapper.php`)
- Primary service accessed via `ddeboer_salesforce_mapper`
- Handles CRUD operations for Salesforce objects
- Maps between PHP objects and Salesforce sObjects bidirectionally
- Uses a UnitOfWork pattern to track object identity
- Key methods:
  - `find($model, $id, $related = 1)` - Find single record by ID
  - `findBy($model, array $criteria, array $order = [], $related = 1, $deleted = false)` - Find by criteria
  - `findAll($model, array $order = [], $related = 1, $deleted = false)` - Fetch all records
  - `save($model)` - Create or update records
  - `delete($models)` - Delete records
  - `count($modelClass, $includeDeleted = false, array $criteria = [])` - Count records

**MappedBulkSaver** (`MappedBulkSaver.php`)
- Service accessed via `ddeboer_salesforce_mapper.bulk_saver`
- Performs bulk operations to stay within Salesforce API limits
- Wraps the phpforce BulkSaver with attribute-aware mapping
- Methods: `save($model, $matchField = null)`, `delete($model)`, `flush()`

**AttributeReader** (`Attribute/AttributeReader.php`)
- Reads Salesforce PHP 8 attributes from model classes
- Parses `#[SalesforceObject]`, `#[Field]`, and `#[Relation]` attributes
- Recursively processes parent classes to collect all mappings
- Provides the same interface as the legacy AnnotationReader for backward compatibility

**UnitOfWork** (`UnitOfWork.php`)
- Identity map pattern implementation
- Prevents duplicate object instantiation for the same Salesforce record
- Tracks objects by class name and Salesforce ID

### PHP 8 Attributes

Models use PHP 8 attributes to define Salesforce mappings:

- `#[SalesforceObject(name: "ObjectName")]` - On class, maps to Salesforce object type
- `#[Field(name: "FieldName")]` - On property, maps to Salesforce field
- `#[Relation(class: ModelClass::class, field: "RelationFieldId", name: "RelationName")]` - On property, maps to related object

Example:
```php
use Ddeboer\Salesforce\MapperBundle\Attribute\SalesforceObject;
use Ddeboer\Salesforce\MapperBundle\Attribute\Field;
use Ddeboer\Salesforce\MapperBundle\Attribute\Relation;

#[SalesforceObject(name: "Opportunity")]
class Opportunity extends AbstractModel
{
    #[Field(name: "Name")]
    protected ?string $name = null;

    #[Field(name: "Amount")]
    protected ?float $amount = null;

    #[Relation(
        field: "AccountId",
        name: "Account",
        class: Account::class
    )]
    protected ?Account $account = null;
}
```

### Model Layer

**AbstractModel** (`Model/AbstractModel.php`)
- Base class for all Salesforce object models
- Provides common fields: `id`, `createdBy`, `createdDate`, `lastModifiedDate`, `systemModstamp`
- All standard Salesforce objects extend this

**Standard Models** (`Model/`)
Standard Salesforce objects provided: Account, Contact, Opportunity, Lead, Campaign, Task, Attachment, etc.

For custom Salesforce objects or custom fields on standard objects, extend the provided models or create new ones extending AbstractModel.

### Query Building

**Related Records**
- The `$related` parameter controls how many levels of relationships to fetch
- `$related = 0`: No related records
- `$related = 1`: One level (e.g., Account on Opportunity)
- `$related = 2`: Two levels (e.g., Account and Account.Owner on Opportunity)
- One-to-many relations are fetched as subqueries

**Criteria Format**
```php
$criteria = [
    'Name' => 'Some Name',           // Equality
    'Amount >=' => 1000,             // With operator
    'CloseDate <' => 'LAST_MONTH',   // Date literals
    'Id IN' => ['001...', '002...']  // Array values
];
```

**Mapper Behavior**
- Read-only fields are automatically ignored when saving
- For updates, only updateable fields are saved; for creates, only createable fields
- Empty strings and null values set `fieldsToNull` on updates
- New records automatically get their Salesforce ID populated after `save()`

### Caching

Object descriptions (metadata) from Salesforce are cached using PSR-3 SimpleCache. The FileCache implementation stores in `%kernel.cache_dir%/salesforce`.

### Events

The mapper dispatches a `Events::beforeSave` event before saving, allowing modification or validation via event listeners.

## Symfony Integration

**Service Configuration** (`Resources/config/services.xml`)
- Main services: `ddeboer_salesforce_mapper`, `ddeboer_salesforce_mapper.bulk_saver`
- Depends on `phpforce.soap_client` from the PhpforceSalesforceBundle
- Event dispatcher integration for hooks

**Bundle Registration**
In `AppKernel.php`:
```php
new Phpforce\SalesforceBundle\PhpforceSalesforceBundle(),
new Ddeboer\Salesforce\MapperBundle\DdeboerSalesforceMapperBundle(),
```

## PHP Version

Requires PHP 8.0 or later.

**Breaking Change**: As of the latest version, this bundle requires PHP 8.0+ and uses native PHP 8 attributes instead of Doctrine annotations. This provides better performance and removes the doctrine/annotations dependency.

## Dependencies

- `phpforce/soap-client` - Underlying SOAP client (via PhpforceSalesforceBundle)
- `doctrine/common` - Collection utilities
- `symfony/config`, `symfony/dependency-injection` - Symfony integration
- `psr/simple-cache` - Caching interface

## Migration from Annotations to Attributes

If upgrading from an older version that used Doctrine annotations:

1. **Update PHP version** to 8.0 or later
2. **Replace annotation imports** with attribute imports:
   ```php
   // Old
   use Ddeboer\Salesforce\MapperBundle\Annotation as Salesforce;

   // New
   use Ddeboer\Salesforce\MapperBundle\Attribute\SalesforceObject;
   use Ddeboer\Salesforce\MapperBundle\Attribute\Field;
   use Ddeboer\Salesforce\MapperBundle\Attribute\Relation;
   ```

3. **Convert class annotations** to attributes:
   ```php
   // Old
   /** @Salesforce\AnnotationObject(name="Opportunity") */
   class Opportunity extends AbstractModel

   // New
   #[SalesforceObject(name: "Opportunity")]
   class Opportunity extends AbstractModel
   ```

4. **Convert property annotations** to attributes:
   ```php
   // Old
   /** @Salesforce\Field(name="Name") */
   protected $name;

   // New
   #[Field(name: "Name")]
   protected ?string $name = null;
   ```

5. **Add type hints and default values** to properties (recommended for PHP 8):
   ```php
   #[Field(name: "Amount")]
   protected ?float $amount = null;
   ```
