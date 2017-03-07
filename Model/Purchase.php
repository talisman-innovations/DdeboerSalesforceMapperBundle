<?php

/* 
 * Copyright Talisman Innovations Ltd. (2017). All rights reserved.
 */

namespace Ddeboer\Salesforce\MapperBundle\Model;

use Ddeboer\Salesforce\MapperBundle\Annotation as Salesforce;

/**
 * Salesforce standard Purchase__c object
 *
 * You can extend this class to incorporate custom fields on the object.
 *
 * @Salesforce\Object(name="Purchase__c")
 */
class Purchase extends AbstractModel
{

    /**
     * Contact__r
     * @var Contact
     * @Salesforce\Relation(field="Contact__c", name="Contact",
     *                      class="Ddeboer\Salesforce\MapperBundle\Model\Contact")
     */
    protected $contact;
    /**
     * @var string
     * @Salesforce\Field(name="Contact__c")
     */
    protected $contactId;
    
    /**
     * Account__r
     * @var Contact
     * @Salesforce\Relation(field="Account__c", name="Contact",
     *                      class="Ddeboer\Salesforce\MapperBundle\Model\Account")
     */
    protected $account;
    /**
     * @var string
     * @Salesforce\Field(name="Account__c")
     */
    protected $accountId;
    /**
     * @var tnsQueryResult
     */
    protected $attachedContentDocuments;
    /**
     * @var tnsQueryResult
     */
    protected $attachments;
    /**
     * @var tnsQueryResult
     */
    protected $combinedAttachments;
    /**
     * @var tnsQueryResult
     */
    protected $contentDocumentLinks;
    /**
     * @var tnsQueryResult
     */
    protected $duplicateRecordItems;
    /**
     * @var tnsQueryResult
     */
    protected $feedSubscriptionsForEntity;
    /**
     * @var tnsQueryResult
     */
    protected $histories;
    /**
     * @var tnsQueryResult
     */
    protected $emails;
    /**
     * @var tnsQueryResult
     */
    protected $lookedUpFromActivities;
    /**
     * @var tnsQueryResult
     */
    protected $notesAndAttachments;
    /**
     * @var tnsQueryResult
     */
    protected $processInstances;
    /**
     * @var tnsQueryResult
     */
    protected $processSteps;
    /**
     * @var tnsQueryResult
     */
    protected $purchaseLineItems;
    /**
     * @var tnsQueryResult
     */
    protected $recordAssociatedGroups;
    /**
     * @var tnsQueryResult
     */
    protected $notes;
    /**
     * @var tnsQueryResult
     */
    protected $topicAssignments;
    /**
     * @var double
     * @Salesforce\Field(name="Line_Item_Count__c")
     */
    protected $lineItemCount;
    /**
     * @var double
     * @Salesforce\Field(name="Total_Ex_VAT__c")
     */
    protected $totalExVAT;
    /**
     * @var double
     * @Salesforce\Field(name="Total__c")
     */
    protected $total;
    /**
     * @var \DateTime
     * @Salesforce\Field(name="Date_Time__c")
     */
    protected $dateTime;
    /**
     * @var boolean
     * @Salesforce\Field(name="IsDeleted")
     */
    protected $isDeleted;
    
    /**
     * @var string
     * @Salesforce\Field(name="External_System_ID__c")
     */
    protected $externalSystemId;
    /**
     * @var string
     * @Salesforce\Field(name="Name")
     */
    protected $name;
    /**
     * @var string
     * @Salesforce\Field(name="Source_System__c")
     */
    protected $sourceSystem;
    /**
     * @var string
     * @Salesforce\Field(name="Status__c")
     */
    protected $status;
     /**
     * @var string
     * @Salesforce\Field(name="Type__c")
     */
    protected $type;
    
    public function getAttachedContentDocuments() {
        return $this->attachedContentDocuments;
    }

    public function getAttachments() {
        return $this->attachments;
    }

    public function getCombinedAttachments() {
        return $this->combinedAttachments;
    }

    public function getContentDocumentLinks() {
        return $this->contentDocumentLinks;
    }

    public function getDuplicateRecordItems() {
        return $this->duplicateRecordItems;
    }

    public function getFeedSubscriptionsForEntity() {
        return $this->feedSubscriptionsForEntity;
    }

    public function getHistories() {
        return $this->histories;
    }

    public function getEmails() {
        return $this->emails;
    }

    public function getLookedUpFromActivities() {
        return $this->lookedUpFromActivities;
    }

    public function getNotesAndAttachments() {
        return $this->notesAndAttachments;
    }

    public function getProcessInstances() {
        return $this->processInstances;
    }

    public function getProcessSteps() {
        return $this->processSteps;
    }

    public function getPurchaseLineItems() {
        return $this->purchaseLineItems;
    }

    public function getRecordAssociatedGroups() {
        return $this->recordAssociatedGroups;
    }

    public function getNotes() {
        return $this->notes;
    }

    public function getTopicAssignments() {
        return $this->topicAssignments;
    }

    public function getAccount() {
        return $this->account;
    }

    public function getContact() {
        return $this->contact;
    }

    public function getLineItemCount() {
        return $this->lineItemCount;
    }

    public function getTotalExVAT() {
        return $this->totalExVAT;
    }

    public function getTotal() {
        return $this->total;
    }

    public function getDateTime() {
        return $this->dateTime;
    }

    public function getIsDeleted() {
        return $this->isDeleted;
    }

    public function getContactId() {
        return $this->contactId;
    }

    public function getExternalSystemId() {
        return $this->externalSystemId;
    }

    public function getName() {
        return $this->name;
    }

    public function getSourceSystem() {
        return $this->sourceSystem;
    }

    public function getStatus() {
        return $this->status;
    }

    public function getType() {
        return $this->type;
    }

    public function setAttachedContentDocuments($attachedContentDocuments) {
        $this->attachedContentDocuments = $attachedContentDocuments;
    }

    public function setAttachments($attachments) {
        $this->attachments = $attachments;
    }

    public function setCombinedAttachments($combinedAttachments) {
        $this->combinedAttachments = $combinedAttachments;
    }

    public function setContentDocumentLinks($contentDocumentLinks) {
        $this->contentDocumentLinks = $contentDocumentLinks;
    }

    public function setDuplicateRecordItems($duplicateRecordItems) {
        $this->duplicateRecordItems = $duplicateRecordItems;
    }

    public function setFeedSubscriptionsForEntity($feedSubscriptionsForEntity) {
        $this->feedSubscriptionsForEntity = $feedSubscriptionsForEntity;
    }

    public function setHistories($histories) {
        $this->histories = $histories;
    }

    public function setEmails(tnsQueryResult $emails) {
        $this->emails = $emails;
    }

    public function setLookedUpFromActivities($lookedUpFromActivities) {
        $this->lookedUpFromActivities = $lookedUpFromActivities;
    }

    public function setNotesAndAttachments($notesAndAttachments) {
        $this->notesAndAttachments = $notesAndAttachments;
    }

    public function setProcessInstances($processInstances) {
        $this->processInstances = $processInstances;
    }

    public function setProcessSteps($processSteps) {
        $this->processSteps = $processSteps;
    }

    public function setPurchaseLineItems($purchaseLineItems) {
        $this->purchaseLineItems = $purchaseLineItems;
    }

    public function setRecordAssociatedGroups($recordAssociatedGroups) {
        $this->recordAssociatedGroups = $recordAssociatedGroups;
    }

    public function setNotes($notes) {
        $this->notes = $notes;
    }

    public function setTopicAssignments(tnsQueryResult $topicAssignments) {
        $this->topicAssignments = $topicAssignments;
    }

    public function setAccount(Account $account) {
        $this->account = $account;
    }

    public function setContact(Contact $contact) {
        $this->contact = $contact;
    }

    public function setLineItemCount($lineItemCount) {
        $this->lineItemCount = $lineItemCount;
    }

    public function setTotalExVAT($totalExVAT) {
        $this->totalExVAT = $totalExVAT;
    }

    public function setTotal($total) {
        $this->total = $total;
    }

    public function setDateTime(\DateTime $dateTime) {
        $this->dateTime = $dateTime;
    }

    public function setContactId($contactId) {
        $this->contactId = $contactId;
    }

    public function setExternalSystemId($externalSystemId) {
        $this->externalSystemId = $externalSystemId;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setSourceSystem($sourceSystem) {
        $this->sourceSystem = $sourceSystem;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function getAccountId() {
        return $this->accountId;
    }

    public function setAccountId($accountId) {
        $this->accountId = $accountId;
    }


}

