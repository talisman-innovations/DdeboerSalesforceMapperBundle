<?php

namespace Ddeboer\Salesforce\MapperBundle\Model;

use Ddeboer\Salesforce\MapperBundle\Attribute\SalesforceObject;
use Ddeboer\Salesforce\MapperBundle\Attribute\Field;
use Ddeboer\Salesforce\MapperBundle\Attribute\Relation;

/**
 * Represents a product entry (an association between a Pricebook2 and Product2)
 * in a price book
 *
 * @link http://www.salesforce.com/us/developer/docs/api/Content/sforce_api_objects_pricebookentry.htm
 */
#[SalesforceObject(name: "PricebookEntry")]
class PricebookEntry extends AbstractModel
{
    #[Field(name: "Name")]
    protected $name;

    #[Field(name: "IsActive")]
    protected $isActive;

    #[Relation(
        class: Product::class,
        field: "Product2Id",
        name: "Product2"
    )]
    protected $product;

    #[Field(name: "Product2Id")]
    protected $productId;

    protected $pricebook;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getIsActive()
    {
        return $this->isActive;
    }

    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    }

    public function getProduct()
    {
        return $this->product;
    }

    public function setProduct($product)
    {
        $this->product = $product;
    }
}