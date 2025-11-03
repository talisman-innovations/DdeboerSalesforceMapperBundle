<?php

namespace Ddeboer\Salesforce\MapperBundle\Attribute;

use Doctrine\Common\Collections\ArrayCollection;
use ReflectionClass;
use ReflectionProperty;

/**
 * Reads Salesforce PHP 8 attributes
 *
 * This class provides the same interface as the legacy AnnotationReader
 * but reads PHP 8 attributes instead of Doctrine annotations.
 */
class AttributeReader
{
    /**
     * Get Salesforce fields from model
     *
     * @param string|object $model Model class name or object
     * @return ArrayCollection<string, Field> Array of field attributes indexed by property name
     */
    public function getSalesforceFields(string|object $model): ArrayCollection
    {
        $properties = $this->getSalesforceProperties($model);
        return new ArrayCollection($properties['fields']);
    }

    /**
     * Get Salesforce field
     *
     * @param string|object $model Domain model object or class name
     * @param string $field Field name (property name)
     * @return Field|null
     */
    public function getSalesforceField(string|object $model, string $field): ?Field
    {
        $properties = $this->getSalesforceProperties($model);
        return $properties['fields'][$field] ?? null;
    }

    /**
     * Get Salesforce relations
     *
     * @param string|object $model Model class name or object
     * @return array<string, Relation> Array of relation attributes indexed by property name
     */
    public function getSalesforceRelations(string|object $model): array
    {
        $properties = $this->getSalesforceProperties($model);
        return $properties['relations'];
    }

    /**
     * Get Salesforce object attribute
     *
     * @param string|object $model Model class name or object
     * @return SalesforceObject|null
     */
    public function getSalesforceObject(string|object $model): ?SalesforceObject
    {
        $properties = $this->getSalesforceProperties($model);
        return $properties['object'];
    }

    /**
     * Get Salesforce properties
     *
     * @param string|object $modelClass Model class name or object
     * @return array{object: SalesforceObject|null, relations: array<string, Relation>, fields: array<string, Field>}
     */
    public function getSalesforceProperties(string|object $modelClass): array
    {
        $reflClass = new ReflectionClass($modelClass);
        return $this->getSalesforcePropertiesFromReflectionClass($reflClass);
    }

    /**
     * Get Salesforce properties from reflection class
     *
     * @param ReflectionClass $reflClass
     * @return array{object: SalesforceObject|null, relations: array<string, Relation>, fields: array<string, Field>}
     */
    protected function getSalesforcePropertiesFromReflectionClass(ReflectionClass $reflClass): array
    {
        $salesforceProperties = [
            'object'    => null,
            'relations' => [],
            'fields'    => []
        ];

        // Read class-level SalesforceObject attribute
        $classAttributes = $reflClass->getAttributes(SalesforceObject::class);
        if (!empty($classAttributes)) {
            $salesforceProperties['object'] = $classAttributes[0]->newInstance();
        }

        // Read property-level attributes
        $reflProperties = $reflClass->getProperties();
        foreach ($reflProperties as $reflProperty) {
            $propertyName = $reflProperty->getName();

            // Check for Field attribute
            $fieldAttributes = $reflProperty->getAttributes(Field::class);
            if (!empty($fieldAttributes)) {
                $salesforceProperties['fields'][$propertyName] = $fieldAttributes[0]->newInstance();
            }

            // Check for Relation attribute
            $relationAttributes = $reflProperty->getAttributes(Relation::class);
            if (!empty($relationAttributes)) {
                $salesforceProperties['relations'][$propertyName] = $relationAttributes[0]->newInstance();
            }
        }

        // Process parent class
        if ($reflClass->getParentClass()) {
            $properties = $this->getSalesforcePropertiesFromReflectionClass(
                $reflClass->getParentClass()
            );

            // Use current class's object if defined, otherwise inherit from parent
            $salesforceProperties['object'] = $salesforceProperties['object']
                                              ?? $properties['object'];

            // Merge fields and relations (current class overrides parent)
            $salesforceProperties['fields'] = array_merge(
                $properties['fields'],
                $salesforceProperties['fields']
            );

            $salesforceProperties['relations'] = array_merge(
                $properties['relations'],
                $salesforceProperties['relations']
            );
        }

        return $salesforceProperties;
    }
}
