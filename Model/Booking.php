<?php

/* 
 * Copyright Talisman Innovations Ltd. (2017). All rights reserved.
 */

namespace Ddeboer\Salesforce\MapperBundle\Model;

use Ddeboer\Salesforce\MapperBundle\Annotation as Salesforce;

/**
 * Salesforce standard Booking__c object
 *
 * You can extend this class to incorporate custom fields on the object.
 *
 * @Salesforce\Object(name="Booking__c")
 */
class Booking extends AbstractModel
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
     * Case__r
     * @var Case
     * @Salesforce\Relation(field="Case__c", name="Case",
     *                      class="Ddeboer\Salesforce\MapperBundle\Model\SfCase")
     */
    protected $sfCase;
    /**
     * @var string
     * @Salesforce\Field(name="Case__c")
     */
    protected $caseId;
    
    /**
     * @var tnsQueryResult
     */
    protected $attachedContentDocuments;
    /**
     * @var tnsQueryResult
     */
    protected $BookingLineItems;
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
    protected $recordAssociatedGroups;
    /**
     * @var tnsQueryResult
     */
    protected $topicAssignments;
    /**
     * @var tnsQueryResult
     */
    protected $notes;
    /**
     * @var \DateTime
     * @Salesforce\Field(name="Date__c")
     */
    protected $date;
    /**
     * @var boolean
     * @Salesforce\Field(name="IsDeleted")
     */
    protected $isDeleted;
    /**
     * @var string
     * @Salesforce\Field(name="Name")
     */
    protected $name;
    /**
     * @var string
     * @Salesforce\Field(name="Number_of_Items__c")
     */
    protected $numberOfItems;
    /**
     * @var string
     * @Salesforce\Field(name="Slot_Name__c")
     */
    protected $slotName;
    /**
     * @var string
     * @Salesforce\Field(name="Table_Name__c")
     */
    protected $tableName;

    public function getContact() {
        return $this->contact;
    }

    public function getContactId() {
        return $this->contactId;
    }

    public function getAccount() {
        return $this->account;
    }

    public function getAccountId() {
        return $this->accountId;
    }

    public function getSfCase() {
        return $this->case;
    }

    public function getCaseId() {
        return $this->caseId;
    }

    public function getAttachedContentDocuments() {
        return $this->attachedContentDocuments;
    }

    public function getBookingLineItems() {
        return $this->BookingLineItems;
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

    public function getRecordAssociatedGroups() {
        return $this->recordAssociatedGroups;
    }

    public function getTopicAssignments() {
        return $this->topicAssignments;
    }

    public function getNotes() {
        return $this->notes;
    }

    public function getDate() {
        return $this->date;
    }

    public function getIsDeleted() {
        return $this->isDeleted;
    }

    public function getName() {
        return $this->name;
    }

    public function getNumberOfItems() {
        return $this->numberOfItems;
    }

    public function getSlotName() {
        return $this->slotName;
    }

    public function getTableName() {
        return $this->tableName;
    }

    public function setContact(Contact $contact) {
        $this->contact = $contact;
    }

    public function setContactId($contactId) {
        $this->contactId = $contactId;
    }

    public function setAccount(Contact $account) {
        $this->account = $account;
    }

    public function setAccountId($accountId) {
        $this->accountId = $accountId;
    }

    public function setSfCase($sfCase) {
        $this->case = $sfCase;
    }

    public function setCaseId($sfCaseId) {
        $this->caseId = $sfCaseId;
    }

    public function setAttachedContentDocuments(tnsQueryResult $attachedContentDocuments) {
        $this->attachedContentDocuments = $attachedContentDocuments;
    }

    public function setBookingLineItems(tnsQueryResult $BookingLineItems) {
        $this->BookingLineItems = $BookingLineItems;
    }

    public function setAttachments(tnsQueryResult $attachments) {
        $this->attachments = $attachments;
    }

    public function setCombinedAttachments(tnsQueryResult $combinedAttachments) {
        $this->combinedAttachments = $combinedAttachments;
    }

    public function setContentDocumentLinks(tnsQueryResult $contentDocumentLinks) {
        $this->contentDocumentLinks = $contentDocumentLinks;
    }

    public function setDuplicateRecordItems(tnsQueryResult $duplicateRecordItems) {
        $this->duplicateRecordItems = $duplicateRecordItems;
    }

    public function setFeedSubscriptionsForEntity(tnsQueryResult $feedSubscriptionsForEntity) {
        $this->feedSubscriptionsForEntity = $feedSubscriptionsForEntity;
    }

    public function setEmails(tnsQueryResult $emails) {
        $this->emails = $emails;
    }

    public function setLookedUpFromActivities(tnsQueryResult $lookedUpFromActivities) {
        $this->lookedUpFromActivities = $lookedUpFromActivities;
    }

    public function setNotesAndAttachments(tnsQueryResult $notesAndAttachments) {
        $this->notesAndAttachments = $notesAndAttachments;
    }

    public function setProcessInstances(tnsQueryResult $processInstances) {
        $this->processInstances = $processInstances;
    }

    public function setRecordAssociatedGroups(tnsQueryResult $recordAssociatedGroups) {
        $this->recordAssociatedGroups = $recordAssociatedGroups;
    }

    public function setTopicAssignments(tnsQueryResult $topicAssignments) {
        $this->topicAssignments = $topicAssignments;
    }

    public function setNotes(tnsQueryResult $notes) {
        $this->notes = $notes;
    }

    public function setDate(\DateTime $date) {
        $this->date = $date;
    }

    public function setIsDeleted($isDeleted) {
        $this->isDeleted = $isDeleted;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setNumberOfItems($numberOfItems) {
        $this->numberOfItems = $numberOfItems;
    }

    public function setSlotName($slotName) {
        $this->slotName = $slotName;
    }

    public function setTableName($tableName) {
        $this->tableName = $tableName;
    }


    
}
