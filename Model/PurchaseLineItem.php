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
 * @Salesforce\Object(name="Purchase_Line_Item__c")
 */
class PurchaseLineItem extends AbstractModel
{
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
    protected $emails;
    /**
     * @var tnsQueryResult
     */
    protected $feedSubscriptionsForEntity;
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
     * Purchase__r
     * @var Purchase
     * @Salesforce\Relation(field="Purchase__c", name="Purchase",
     *                      class="Ddeboer\Salesforce\MapperBundle\Model\Purchase")
     */
    protected $purchase;
    /**
     * @var double
     * @Salesforce\Field(name="Subtotal__c")
     */
    protected $subTotal;
    /**
     * @var double
     * @Salesforce\Field(name="Total_Price_Ex_VAT__c")
     */
    protected $totalPriceExVAT;
    /**
     * @var double
     * @Salesforce\Field(name="Unit_Price_Ex_VAT__c")
     */
    protected $unitPriceExVAT;
    /**
     * @var double
     * @Salesforce\Field(name="Unit_Price_Inc_VAT__c")
     */
    protected $unitPriceIncVAT;
    /**
     * @var double
     * @Salesforce\Field(name="Unit_Price__c")
     */
    protected $unitPrice;
    /**
     * @var double
     * @Salesforce\Field(name="Quantity__c")
     */
    protected $quantity;
    /**
     * @var boolean
     * @Salesforce\Field(name="IsDeleted")
     */
    protected $isDeleted;
    /**
     * @var boolean
     * @Salesforce\Field(name="Giftaid__c")
     */
    protected $giftaid;
    /**
     * @var string
     * @Salesforce\Field(name="Category__c")
     */
    protected $category;
    /**
     * @var string
     * @Salesforce\Field(name="Description__c")
     */
    protected $description;
    /**
     * @var string
     * @Salesforce\Field(name="Name")
     */
    protected $name;
    /**
     * @var string
     * @Salesforce\Field(name="Product_Name__c")
     */
    protected $productName;
    /**
     * @var string
     * @Salesforce\Field(name="Product_Range__c")
     */
    protected $productRange;
    /**
     * @var string
     * @Salesforce\Field(name="Purchase__c")
     */
    protected $purchaseId;
    /**
     * @var string
     * @Salesforce\Field(name="SKU__c")
     */
    protected $sku;
    /**
     * @var string
     * @Salesforce\Field(name="Source_System_ID__c")
     */
    protected $sourceSystemId;
    /**
     * @var string
     * @Salesforce\Field(name="Source_System__c")
     */
    protected $sourceSystem;
    /**
     * @var \DateTime
     * @Salesforce\Field(name="Event_Date_Time__c")
     */
    protected $eventDate;
    
    
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

    public function getEmails() {
        return $this->emails;
    }

    public function getFeedSubscriptionsForEntity() {
        return $this->feedSubscriptionsForEntity;
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

    public function getRecordAssociatedGroups() {
        return $this->recordAssociatedGroups;
    }

    public function getTopicAssignments() {
        return $this->topicAssignments;
    }

    public function getNotes() {
        return $this->notes;
    }

    public function getPurchase() {
        return $this->purchase;
    }

    public function getSubTotal() {
        return $this->subTotal;
    }

    public function getTotalPriceExVAT() {
        return $this->totalPriceExVAT;
    }

    public function getUnitPriceExVAT() {
        return $this->unitPriceExVAT;
    }

    public function getUnitPriceIncVAT() {
        return $this->unitPriceIncVAT;
    }

    public function getUnitPrice() {
        return $this->unitPrice;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function getIsDeleted() {
        return $this->isDeleted;
    }

    public function getGiftaid() {
        return $this->giftaid;
    }

    public function getCategory() {
        return $this->category;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getName() {
        return $this->name;
    }

    public function getProductName() {
        return $this->productName;
    }

    public function getProductRange() {
        return $this->productRange;
    }

    public function getPurchaseId() {
        return $this->purchaseId;
    }

    public function getSku() {
        return $this->sku;
    }

    public function getSourceSystemId() {
        return $this->sourceSystemId;
    }

    public function getSourceSystem() {
        return $this->sourceSystem;
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

    public function setEmails($emails) {
        $this->emails = $emails;
    }

    public function setFeedSubscriptionsForEntity($feedSubscriptionsForEntity) {
        $this->feedSubscriptionsForEntity = $feedSubscriptionsForEntity;
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

    public function setRecordAssociatedGroups($recordAssociatedGroups) {
        $this->recordAssociatedGroups = $recordAssociatedGroups;
    }

    public function setTopicAssignments($topicAssignments) {
        $this->topicAssignments = $topicAssignments;
    }

    public function setNotes($notes) {
        $this->notes = $notes;
    }

    public function setPurchase($purchase) {
        $this->purchase = $purchase;
    }

    public function setSubTotal($subTotal) {
        $this->subTotal = $subTotal;
    }

    public function setTotalPriceExVAT($totalPriceExVAT) {
        $this->totalPriceExVAT = $totalPriceExVAT;
    }

    public function setUnitPriceExVAT($unitPriceExVAT) {
        $this->unitPriceExVAT = $unitPriceExVAT;
    }

    public function setUnitPriceIncVAT($unitPriceIncVAT) {
        $this->unitPriceIncVAT = $unitPriceIncVAT;
    }

    public function setUnitPrice($unitPrice) {
        $this->unitPrice = $unitPrice;
    }

    public function setQuantity($quantity) {
        $this->quantity = $quantity;
    }

    public function setGiftaid($giftaid) {
        $this->giftaid = $giftaid;
    }

    public function setCategory($category) {
        $this->category = $category;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setProductName($productName) {
        $this->productName = $productName;
    }

    public function setProductRange($productRange) {
        $this->productRange = $productRange;
    }

    public function setPurchaseId($purchaseId) {
        $this->purchaseId = $purchaseId;
    }

    public function setSku($sku) {
        $this->sku = $sku;
    }

    public function setSourceSystemId($sourceSystemId) {
        $this->sourceSystemId = $sourceSystemId;
    }

    public function setSourceSystem($sourceSystem) {
        $this->sourceSystem = $sourceSystem;
    }
    
    public function getEventDate() {
        return $this->eventDate;
    }

    public function setEventDate(\DateTime $eventDate) {
        $this->eventDate = $eventDate;
    }


}

