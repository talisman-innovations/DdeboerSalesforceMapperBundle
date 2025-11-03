<?php

namespace Ddeboer\Salesforce\MapperBundle\Model;

use Ddeboer\Salesforce\MapperBundle\Attribute\SalesforceObject;
use Ddeboer\Salesforce\MapperBundle\Attribute\Field;
use Ddeboer\Salesforce\MapperBundle\Attribute\Relation;

/**
 * OpportunityLineItem proxy object
 * 
 */
#[SalesforceObject(name: "OpportunityLineItem")]
class OpportunityLineItem extends AbstractModel
{
    #[Field(name: "Description")]
    protected $description;
    
    /**
     * @var boolean
     */
    protected $isDeleted;
    
    #[Field(name: "ListPrice")]
    protected $listPrice;
    
    #[Relation(
        class: Opportunity::class,
        field: "OpportunityId",
        name: "Opportunity"
    )]
    protected $opportunity;
    
    #[Field(name: "OpportunityId")]
    protected $opportunityId;
    
    #[Relation(
        class: PricebookEntry::class,
        field: "PricebookEntryId",
        name: "PricebookEntry"
    )]
    protected $pricebookEntry;
    
    #[Field(name: "PricebookEntryId")]
    protected $pricebookEntryId;
    
    #[Field(name: "Quantity")]
    protected $quantity;
    
    /**
     * @var \DateTime
     */
    protected $serviceDate;
    
    /**
     * @var int
     */
    protected $sortOrder;
    
    #[Field(name: "TotalPrice")]
    protected $totalPrice;
    
    #[Field(name: "UnitPrice")]
    protected $unitPrice;

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    public function isDeleted()
    {
        return $this->isDeleted;
    }

    public function getListPrice()
    {
        return $this->listPrice;
    }

    public function setListPrice($listPrice)
    {
        $this->listPrice = $listPrice;
        return $this;
    }

    public function getOpportunity()
    {
        return $this->opportunity;
    }

    public function setOpportunity($opportunity)
    {
        $this->opportunity = $opportunity;
        $this->opportunityId = $opportunity->getId();
        return $this;
    }

    public function getOpportunityId()
    {
        return $this->opportunityId;
    }

    public function setOpportunityId($opportunityId)
    {
        $this->opportunityId = $opportunityId;
        return $this;
    }

    public function getPricebookEntry()
    {
        return $this->pricebookEntry;
    }

    public function setPricebookEntry($pricebookEntry)
    {
        $this->pricebookEntry = $pricebookEntry;
        return $this;
    }

    public function getPricebookEntryId()
    {
        return $this->pricebookEntryId;
    }

    public function setPricebookEntryId($pricebookEntryId)
    {
        $this->pricebookEntryId = $pricebookEntryId;
        return $this;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    public function getServiceDate()
    {
        return $this->serviceDate;
    }

    public function setServiceDate(\DateTime $serviceDate)
    {
        $this->serviceDate = $serviceDate;
        return $this;
    }

    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;
        return $this;
    }

    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice = $totalPrice;
        return $this;
    }

    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;
        return $this;
    }
}