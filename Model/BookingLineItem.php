<?php

/* 
 * Copyright Talisman Innovations Ltd. (2017). All rights reserved.
 */

namespace Ddeboer\Salesforce\MapperBundle\Model;

use Ddeboer\Salesforce\MapperBundle\Annotation as Salesforce;

/**
 * Salesforce standard Booking_Line_Item__c object
 *
 * You can extend this class to incorporate custom fields on the object.
 *
 * @Salesforce\Object(name="Booking_Line_Item__c")
 */
class BookingLineItem extends AbstractModel
{
    
    /**
     * Booking__r
     * @var Purchase
     * @Salesforce\Relation(field="Booking__c", name="Booking",
     *                      class="Ddeboer\Salesforce\MapperBundle\Model\Booking")
     */
    protected $booking;
     /**
     * @var string
     * @Salesforce\Field(name="Booking__c")
     */
    protected $bookingId;
    /**
     * @var string
     * @Salesforce\Field(name="Accession_Number__c")
     */
    protected $accessionNumber;
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
     * @Salesforce\Field(name="Object_Type__c")
     */
    protected $objectType;
    /**
     * @var string
     * @Salesforce\Field(name="IsDeleted")
     */
    protected $isDeleted;
    
    public function getBooking() {
        return $this->booking;
    }

    public function getBookingId() {
        return $this->bookingId;
    }

    public function getAccessionNumber() {
        return $this->accessionNumber;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getName() {
        return $this->name;
    }

    public function getObjectType() {
        return $this->objectType;
    }

    public function getIsDeleted() {
        return $this->isDeleted;
    }

    public function setBooking(Purchase $booking) {
        $this->booking = $booking;
    }

    public function setBookingId($bookingId) {
        $this->bookingId = $bookingId;
    }

    public function setAccessionNumber($accessionNumber) {
        $this->accessionNumber = $accessionNumber;
    }


    public function setDescription($description) {
        $this->description = $description;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setObjectType($objectType) {
        $this->objectType = $objectType;
    }

    public function setIsDeleted($isDeleted) {
        $this->isDeleted = $isDeleted;
    }



  
}

