<?php
namespace Ddeboer\Salesforce\MapperBundle;

use Ddeboer\Salesforce\MapperBundle\Attribute\AttributeReader;

class UnitOfWork
{
    protected $mapper;
    protected $attributeReader;
    protected $identityMap = array();

    public function __construct(Mapper $mapper, AttributeReader $attributeReader)
    {
        $this->mapper = $mapper;
        $this->attributeReader = $attributeReader;
    }

    public function find($modelClass, $id)
    {
        $sObjectName = $this->getObjectName($modelClass);

        if (isset($this->identityMap[$sObjectName][$id])) {
            return $this->identityMap[$sObjectName][$id];
        }
    }

    public function addToIdentityMap($model)
    {
        $this->getObjectName($model);
        $this->identityMap[$this->getObjectName($model)][$model->getId()] = $model;
    }

    protected function getObjectName($model)
    {
        $description = $this->mapper->getObjectDescription($model);

        return $description->getName();
    }
}