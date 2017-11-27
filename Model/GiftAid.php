<?php

/* 
 * Copyright Talisman Innovations Ltd. (2017). All rights reserved.
 */

namespace Ddeboer\Salesforce\MapperBundle\Model;

use Ddeboer\Salesforce\MapperBundle\Annotation as Salesforce;
use DateTime;
/**
 * Salesforce standard Booking__c object
 *
 * You can extend this class to incorporate custom fields on the object.
 *
 * @Salesforce\Object(name="Gift_Aid_Mandate__c")
 */
class GiftAid extends AbstractModel
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
     * @var tnsQueryResult
     */
    protected $attachedContentDocuments;
    /**
     * @var tnsQueryResult
     */
    protected $attachedContentNotes;
    /**
     * @var tnsQueryResult
     */
    protected $attachments;
    /**
     * @var boolean
     * @Salesforce\Field(name="Cancelled_by_Customer__c")
     */
    protected $cancelledByCustomer;
    /**
     * @var tnsQueryResult
     */
    protected $combinedAttachments;
    /**
     * @var tnsQueryResult
     */        
    protected $contentDocumentLinks;
    /**
     * @var DateTime
     * @Salesforce\Field(name="Customer_Cancellation_Date__c")
     */
    protected $cancelledDate;
    /**
     * @var tnsQueryResult
     */
    protected $duplicateRecordItems;
    /**
     * @var tnsQueryResult
     */
    protected $emails;
    /**
     * @var tnsQueryResult
     */
    protected $feedSubscriptionsForEntity;
    /**
     * @var tnsQueryResult
     */
    protected $histories;
    /**
     * @var boolean
     * @Salesforce\Field(name="IsDeleted")
     */
    protected $isDeleted;
    /**
     * @var tnsQueryResult
     */
    protected $lookedUpFromActivities;
    /**
     * @var \DateTime
     * @Salesforce\Field(name="Mandate_Date__c")
     */
    protected $mandateDate;
    /**
     * @var string
     * @Salesforce\Field(name="Name")
     */
    protected $name;
    /**
     * @var tnsQueryResult
     */
    protected $notes;
    /**
     * @var tnsQueryResult
     */
    protected $notesAndAttachments;
    /**
     * @var tnsQueryResult
     */
    protected $opportunities;
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
    protected $recordAssociatedGroups;
    /**
     * @var tnsQueryResult
     */
    protected $topicAssignments;
    /**
     * @var string
     * @Salesforce\Field(name="Type__c")
     */
    protected $type;
    /**
     * @var UserRecordAccess
     */
    protected $userRecordAccess;
    /**
     * @var string
     * @Salesforce\Field(name="Valid_For__c")
     */
    protected $validFor;
    /**
     * @var boolean
     * @Salesforce\Field(name="Valid__c")
     */
    protected $valid;
    /**
     * @var DateTime
     * @Salesforce\Field(name="Verbal_Confirmation_Sent_Date__c")
     */
    protected $verbalConfirmationSentDate;

    public function getValid() {
        return $this->valid;
    }

    public function setValid($valid) {
        $this->valid = $valid;
    }

    public function getVerbalConfirmationSentDate() {
        return $this->verbalConfirmationSentDate;
    }

    public function setVerbalConfirmationSentDate(DateTime $verbalConfirmationSentDate) {
        $this->verbalConfirmationSentDate = $verbalConfirmationSentDate;
    }

    
    public function getValidFor() {
        return $this->validFor;
    }

    public function setValidFor($validFor) {
        $this->validFor = $validFor;
    }

    public function getUserRecordAccess() {
        return $this->userRecordAccess;
    }

    public function setUserRecordAccess(UserRecordAccess $userRecordAccess) {
        $this->userRecordAccess = $userRecordAccess;
    }

    public function getType() {
        return $this->type;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function getTopicAssignments() {
        return $this->topicAssignments;
    }

    public function setTopicAssignments(tnsQueryResult $topicAssignments) {
        $this->topicAssignments = $topicAssignments;
    }
        
    public function getRecordAssociatedGroups() {
        return $this->recordAssociatedGroups;
    }

    public function setRecordAssociatedGroups(tnsQueryResult $recordAssociatedGroups) {
        $this->recordAssociatedGroups = $recordAssociatedGroups;
    }

    public function getProcessSteps() {
        return $this->processSteps;
    }

    public function setProcessSteps(tnsQueryResult $processSteps) {
        $this->processSteps = $processSteps;
    }

    public function getProcessInstances() {
        return $this->processInstances;
    }

    public function setProcessInstances(tnsQueryResult $processInstances) {
        $this->processInstances = $processInstances;
    }

    public function getOpportunities() {
        return $this->opportunities;
    }

    public function setOpportunities(tnsQueryResult $opportunities) {
        $this->opportunities = $opportunities;
    }

        public function getNotesAndAttachments() {
        return $this->notesAndAttachments;
    }

    public function setNotesAndAttachments(tnsQueryResult $notesAndAttachments) {
        $this->notesAndAttachments = $notesAndAttachments;
    }

        public function getNotes() {
        return $this->notes;
    }

    public function setNotes(tnsQueryResult $notes) {
        $this->notes = $notes;
    }
    
    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }
        
    public function getContact() {
        return $this->contact;
    }

    public function setContact(Contact $contact) {
        $this->contact = $contact;
    }

    public function getContactId() {
        return $this->contactId;
    }

    public function setContactId($contactId) {
        $this->contactId = $contactId;
    }

    public function getAttachedContentDocuments() {
        return $this->attachedContentDocuments;
    }

    public function setAttachedContentDocuments(tnsQueryResult $attachedContentDocuments) {
        $this->attachedContentDocuments = $attachedContentDocuments;
    }

    public function getAttachedContentNotes() {
        return $this->attachedContentNotes;
    }

    public function setAttachedContentNotes(tnsQueryResult $attachedContentNotes) {
        $this->attachedContentNotes = $attachedContentNotes;
    }

    public function getAttachments() {
        return $this->attachments;
    }

    public function setAttachments(tnsQueryResult $attachments) {
        $this->attachments = $attachments;
    }

    public function getCancelledByCustomer() {
        return $this->cancelledByCustomer;
    }

    public function setCancelledByCustomer($cancelledByCustomer) {
        $this->cancelledByCustomer = $cancelledByCustomer;
    }
    public function getCombinedAttachments() {
        return $this->combinedAttachments;
    }

    public function setCombinedAttachments(tnsQueryResult $combinedAttachments) {
        $this->combinedAttachments = $combinedAttachments;
    }

    public function getContentDocumentLinks() {
        return $this->contentDocumentLinks;
    }

    public function setContentDocumentLinks(tnsQueryResult $contentDocumentLinks) {
        $this->contentDocumentLinks = $contentDocumentLinks;
    }

    public function getCancelledDate() {
        return $this->cancelledDate;
    }

    public function setCancelledDate(DateTime $cancelledDate) {
        $this->cancelledDate = $cancelledDate;
    }

    public function getDuplicateRecordItems() {
        return $this->duplicateRecordItems;
    }

    public function setDuplicateRecordItems(tnsQueryResult $duplicateRecordItems) {
        $this->duplicateRecordItems = $duplicateRecordItems;
    }

    public function getEmails() {
        return $this->emails;
    }

    public function setEmails(tnsQueryResult $emails) {
        $this->emails = $emails;
    }

    public function getFeedSubscriptionsForEntity() {
        return $this->feedSubscriptionsForEntity;
    }

    public function setFeedSubscriptionsForEntity(tnsQueryResult $feedSubscriptionsForEntity) {
        $this->feedSubscriptionsForEntity = $feedSubscriptionsForEntity;
    }

    public function getHistories() {
        return $this->histories;
    }

    public function setHistories(tnsQueryResult $histories) {
        $this->histories = $histories;
    }

    public function getIsDeleted() {
        return $this->isDeleted;
    }

    public function setIsDeleted($isDeleted) {
        $this->isDeleted = $isDeleted;
    }

    public function getLookedUpFromActivities() {
        return $this->lookedUpFromActivities;
    }

    public function setLookedUpFromActivities(tnsQueryResult $lookedUpFromActivities) {
        $this->lookedUpFromActivities = $lookedUpFromActivities;
    }
    
    public function getMandateDate() {
        return $this->mandateDate;
    }

    public function setMandateDate(\DateTime $mandateDate) {
        $this->mandateDate = $mandateDate;
    }


}