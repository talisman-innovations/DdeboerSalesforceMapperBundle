<?php

namespace Ddeboer\Salesforce\MapperBundle\Model;

use Ddeboer\Salesforce\MapperBundle\Attribute\SalesforceObject;
use Ddeboer\Salesforce\MapperBundle\Attribute\Field;
use Ddeboer\Salesforce\MapperBundle\Attribute\Relation;

/**
 * Salesforce standard record type object
 *
 */
#[SalesforceObject(name: "RecordType")]
class RecordType extends AbstractModel
{
    #[Field(name: "DeveloperName")]
    protected $developerName;

    #[Field(name: "IsActive")]
    protected $isActive;

    #[Field(name: "Name")]
    protected $name;

    #[Field(name: "SobjectType")]
    protected $sObjectType;

    public function getDeveloperName()
    {
        return $this->developerName;
    }

    public function setDeveloperName($developerName)
    {
        $this->developerName = $developerName;
    }

    public function isActive()
    {
        return $this->isActive;
    }

    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getSObjectType()
    {
        return $this->sObjectType;
    }

    public function setSObjectType($sObjectType)
    {
        $this->sObjectType = $sObjectType;
    }
}

