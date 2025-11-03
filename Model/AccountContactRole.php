<?php

namespace Ddeboer\Salesforce\MapperBundle\Model;

use Ddeboer\Salesforce\MapperBundle\Attribute\SalesforceObject;
use Ddeboer\Salesforce\MapperBundle\Attribute\Field;
use Ddeboer\Salesforce\MapperBundle\Attribute\Relation;

/**
 * Salesforce standard account contact role object
 *
 * You can extend this class to incorporate custom fields on the object.
 *
 */
#[SalesforceObject(name: "AccountContactRole")]
class AccountContactRole extends AbstractModel
{
    #[Relation(
        class: Account::class,
        field: "AccountId",
        name: "Account"
    )]
    protected $account;
    
    #[Field(name: "AccountId")]
    protected $accountId;
    
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
    
    #[Field(name: "Role")]
    protected $role;

    /**
     * Get account
     *
     * @return Account
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Set account
     *
     * @param Account $account
     */
    public function setAccount($account)
    {
        $this->account = $account;
        $this->accountId = $account->getId();
        return $this;
    }

    public function getAccountId()
    {
        return $this->accountId;
    }

    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * Get contact
     * 
     * @return Contact
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set contact
     *
     * @param Contact $contact
     */
    public function setContact($contact)
    {
        $this->contact = $contact;
        $this->contactId = $contact->getId();
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

    /**
     * Get is deleted
     * 
     * @return boolean
     */
    public function isDeleted()
    {
        return $this->isDeleted;
    }

    /**
     * Get is primary
     *
     * @return boolean
     */
    public function isPrimary()
    {
        return $this->isPrimary;
    }

    /**
     * Set is primary
     *
     * @param boolean $isPrimary
     */
    public function setIsPrimary($isPrimary)
    {
        $this->isPrimary = $isPrimary;
        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set role
     *
     * @param string $role
     */
    public function setRole($role)
    {
        $this->role = $role;
        return $this;
    }
}
