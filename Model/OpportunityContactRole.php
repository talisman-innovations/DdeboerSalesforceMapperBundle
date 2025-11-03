<?php

namespace Ddeboer\Salesforce\MapperBundle\Model;

use Ddeboer\Salesforce\MapperBundle\Attribute\SalesforceObject;
use Ddeboer\Salesforce\MapperBundle\Attribute\Field;
use Ddeboer\Salesforce\MapperBundle\Attribute\Relation;

/**
 * Opportunity contact role
 *
 */
#[SalesforceObject(name: "OpportunityContactRole")]
class OpportunityContactRole extends AbstractModel
{
    #[Relation(
        class: Contact::class,
        field: "ContactId",
        name: "Contact"
    )]
    protected $contact;
    
    #[Field(name: "ContactId")]
    protected $contactId;
    
    #[Field(name: "IsDeleted")]
    protected $isDeleted;
    
    #[Field(name: "IsPrimary")]
    protected $isPrimary;
  
    #[Relation(
        class: Opportunity::class,
        field: "OpportunityId",
        name: "Opportunity"
    )]
    protected $opportunity;
    
    #[Field(name: "OpportunityId")]
    protected $opportunityId;
    
    #[Field(name: "Role")]
    protected $role;
    
    public function getContact()
    {
        return $this->contact;
    }

    public function setContact(Contact $contact)
    {
        $this->contact = $contact;
        return $this;
    }

    public function getContactId()
    {
        return $this->contactId;
    }

    public function setContactId($contactId)
    {
        $this->contactId = $contactId;
        return $this;
    }

    public function isDeleted()
    {
        return $this->isDeleted;
    }

    public function isPrimary()
    {
        return $this->isPrimary;
    }

    public function setIsPrimary($isPrimary)
    {
        $this->isPrimary = $isPrimary;
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

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role)
    {
        $this->role = $role;
        return $this;
    }
}