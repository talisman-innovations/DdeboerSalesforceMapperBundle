<?php

/* 
 * Copyright Talisman Innovations Ltd. (2017). All rights reserved.
 */

namespace Ddeboer\Salesforce\MapperBundle\Model;

use Ddeboer\Salesforce\MapperBundle\Annotation as Salesforce;

/**
 * Salesforce standard case object
 *
 * @Salesforce\Object(name="Case")
 */
class SfCase extends AbstractModel {
    
    /**
     * @var Account
     * @Salesforce\Relation(field="AccountId", name="Account",
     *                      class="Ddeboer\Salesforce\MapperBundle\Model\Account")
     */
    protected $account;

    /**
     * @var string
     * @Salesforce\Field(name="AccountId")
     */
    protected $accountId;
    
    /**
     * @Salesforce\Field(name="Description")
     */
    protected $description;
    
    /**
     * @Salesforce\Field(name="ContactEmail")
     */
    protected $contactEmail;
    /**
     * @Salesforce\Field(name="ContactId")
     */
    protected $contactId;
    /**
     * @Salesforce\Field(name="Status")
     */
    protected $status;
    /**
     * @Salesforce\Field(name="Priority")
     */
    protected $priority;
    /**
     * @Salesforce\Field(name="Origin")
     */
    protected $origin;
    /**
     * @Salesforce\Field(name="Subject")
     */
    protected $subject;
    
    public function __construct() {
        $this->status = 'New';
        $this->priority = 'Medium';
        $this->origin = 'Web';
    }
            
    function getAccount() {
        return $this->account;
    }

    function getAccountId() {
        return $this->accountId;
    }

    function getDescription() {
        return $this->description;
    }

    function getContactEmail() {
        return $this->contactEmail;
    }

    function getContactId() {
        return $this->contactId;
    }

    function getStatus() {
        return $this->status;
    }

    function getPriority() {
        return $this->priority;
    }

    function getOrigin() {
        return $this->origin;
    }

    function getSubject() {
        return $this->subject;
    }

    function setAccount(Account $account) {
        $this->account = $account;
    }

    function setAccountId($accountId) {
        $this->accountId = $accountId;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setContactEmail($contactEmail) {
        $this->contactEmail = $contactEmail;
    }

    function setContactId($contactId) {
        $this->contactId = $contactId;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setPriority($priority) {
        $this->priority = $priority;
    }

    function setOrigin($origin) {
        $this->origin = $origin;
    }

    function setSubject($subject) {
        $this->subject = $subject;
    }

}