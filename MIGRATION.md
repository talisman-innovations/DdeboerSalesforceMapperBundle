# Migration Guide: Doctrine Annotations to PHP 8 Attributes

This document describes the migration from Doctrine annotations to native PHP 8 attributes in the Salesforce Mapper Bundle.

## What Changed

### PHP Version Requirement
- **Before**: PHP 7.4+
- **After**: PHP 8.0+

### Dependencies
- **Removed**: `doctrine/annotations`
- **Still Required**: `doctrine/common` (for ArrayCollection utilities)

### Annotation Classes → Attribute Classes
| Old (Doctrine Annotation) | New (PHP 8 Attribute) |
|---------------------------|----------------------|
| `Ddeboer\Salesforce\MapperBundle\Annotation\AnnotationObject` | `Ddeboer\Salesforce\MapperBundle\Attribute\SalesforceObject` |
| `Ddeboer\Salesforce\MapperBundle\Annotation\Field` | `Ddeboer\Salesforce\MapperBundle\Attribute\Field` |
| `Ddeboer\Salesforce\MapperBundle\Annotation\Relation` | `Ddeboer\Salesforce\MapperBundle\Attribute\Relation` |
| `Ddeboer\Salesforce\MapperBundle\Annotation\AnnotationReader` | `Ddeboer\Salesforce\MapperBundle\Attribute\AttributeReader` |

## Migration Steps

### 1. Update PHP Version
Ensure you're running PHP 8.0 or later:
```bash
php -v
```

### 2. Update Composer Dependencies
```bash
composer update
```

### 3. Convert Model Files

#### Automated Migration
Use the provided migration script to automatically convert your custom model files:
```bash
php migrate-to-attributes.php Model/YourCustomModel.php
# Or convert an entire directory:
php migrate-to-attributes.php path/to/your/models/
```

#### Manual Migration
If you prefer to migrate manually or need to understand the changes:

**Before (Doctrine Annotations):**
```php
<?php
namespace App\Model;

use Ddeboer\Salesforce\MapperBundle\Annotation as Salesforce;
use Ddeboer\Salesforce\MapperBundle\Model\AbstractModel;

/**
 * @Salesforce\AnnotationObject(name="CustomObject__c")
 */
class CustomObject extends AbstractModel
{
    /**
     * @var string
     * @Salesforce\Field(name="CustomField__c")
     */
    protected $customField;

    /**
     * @var Account
     * @Salesforce\Relation(field="AccountId__c", name="Account__r",
     *                      class="Ddeboer\Salesforce\MapperBundle\Model\Account")
     */
    protected $account;

    public function getCustomField()
    {
        return $this->customField;
    }

    public function setCustomField($customField)
    {
        $this->customField = $customField;
        return $this;
    }
}
```

**After (PHP 8 Attributes):**
```php
<?php
namespace App\Model;

use Ddeboer\Salesforce\MapperBundle\Attribute\SalesforceObject;
use Ddeboer\Salesforce\MapperBundle\Attribute\Field;
use Ddeboer\Salesforce\MapperBundle\Attribute\Relation;
use Ddeboer\Salesforce\MapperBundle\Model\AbstractModel;
use Ddeboer\Salesforce\MapperBundle\Model\Account;

#[SalesforceObject(name: "CustomObject__c")]
class CustomObject extends AbstractModel
{
    #[Field(name: "CustomField__c")]
    protected ?string $customField = null;

    #[Relation(
        field: "AccountId__c",
        name: "Account__r",
        class: Account::class
    )]
    protected ?Account $account = null;

    public function getCustomField(): ?string
    {
        return $this->customField;
    }

    public function setCustomField(?string $customField): self
    {
        $this->customField = $customField;
        return $this;
    }
}
```

### Key Differences

1. **Import Statements**
   ```php
   // Old
   use Ddeboer\Salesforce\MapperBundle\Annotation as Salesforce;

   // New - import specific attribute classes
   use Ddeboer\Salesforce\MapperBundle\Attribute\SalesforceObject;
   use Ddeboer\Salesforce\MapperBundle\Attribute\Field;
   use Ddeboer\Salesforce\MapperBundle\Attribute\Relation;
   ```

2. **Class Attributes**
   ```php
   // Old
   /** @Salesforce\AnnotationObject(name="Opportunity") */

   // New
   #[SalesforceObject(name: "Opportunity")]
   ```

3. **Property Attributes**
   ```php
   // Old
   /** @Salesforce\Field(name="Name") */
   protected $name;

   // New - use typed properties and named arguments
   #[Field(name: "Name")]
   protected ?string $name = null;
   ```

4. **Relation Attributes**
   ```php
   // Old
   /** @Salesforce\Relation(field="OwnerId", name="Owner",
    *                       class="Ddeboer\Salesforce\MapperBundle\Model\User") */

   // New - use ::class syntax
   #[Relation(
       field: "OwnerId",
       name: "Owner",
       class: User::class
   )]
   ```

5. **Type Hints** (Recommended)
   With PHP 8, you should add type hints to properties and methods:
   ```php
   protected ?string $name = null;
   protected ?float $amount = null;
   protected ?bool $isActive = null;
   protected ?\DateTime $createdDate = null;
   ```

## Backward Compatibility

The service configuration includes a legacy alias for backward compatibility:
- Service `ddeboer_salesforce_mapper.annotation_reader` is aliased to `ddeboer_salesforce_mapper.attribute_reader`
- This allows existing code that injects the old service name to continue working

However, you should update your code to use the new AttributeReader directly.

## Benefits of PHP 8 Attributes

1. **Native Support**: No external library needed for metadata parsing
2. **Better Performance**: Attributes are compiled with opcache, faster than parsing docblocks
3. **Type Safety**: Attributes can define required parameters and types
4. **IDE Support**: Better autocomplete and refactoring support in modern IDEs
5. **Cleaner Syntax**: More concise and readable than docblock annotations

## Troubleshooting

### "Model has no Salesforce attribute" Error
This usually means:
- You forgot to add the `#[SalesforceObject]` attribute to your model class
- You're using the old annotation syntax instead of attributes

### Class Not Found Errors
Make sure you've imported the attribute classes:
```php
use Ddeboer\Salesforce\MapperBundle\Attribute\SalesforceObject;
use Ddeboer\Salesforce\MapperBundle\Attribute\Field;
use Ddeboer\Salesforce\MapperBundle\Attribute\Relation;
```

### "Property type must not be accessed before initialization"
Add default values to your properties:
```php
#[Field(name: "Name")]
protected ?string $name = null;  // ← Add = null
```

## Additional Resources

- [PHP 8 Attributes Documentation](https://www.php.net/manual/en/language.attributes.php)
- [CLAUDE.md](CLAUDE.md) - Updated development guide for this bundle
