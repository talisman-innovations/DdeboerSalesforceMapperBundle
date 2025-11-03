<?php

namespace Ddeboer\Salesforce\MapperBundle\Model;

use Ddeboer\Salesforce\MapperBundle\Attribute\SalesforceObject;
use Ddeboer\Salesforce\MapperBundle\Attribute\Field;
use Ddeboer\Salesforce\MapperBundle\Attribute\Relation;

/**
 * Salesforce standard task object
 *
 */
#[SalesforceObject(name: "Product")]
class Product extends AbstractModel
{
    #[Field(name: "Name")]
    protected $name;

    #[Field(name: "Description")]
    protected $description;
    
    /**
     * Product family 
     * 
     * @var string
     #[Field(name: "Family")]
     */
    protected $family;

    #[Field(name: "IsActive")]
    protected $isActive;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getFamily()
    {
        return $this->family;
    }

    public function setFamily($family)
    {
        $this->family = $family;
    }

    public function getIsActive()
    {
        return $this->isActive;
    }

    public function isActive()
    {
        return $this->getIsActive();
    }

    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    }
}