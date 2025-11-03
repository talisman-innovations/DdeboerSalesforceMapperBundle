<?php
namespace Ddeboer\Salesforce\MapperBundle\Model;

use Ddeboer\Salesforce\MapperBundle\Attribute\SalesforceObject;
use Ddeboer\Salesforce\MapperBundle\Attribute\Field;
use Ddeboer\Salesforce\MapperBundle\Attribute\Relation;

/**
 * A campaign member
 *
 */
#[SalesforceObject(name: "CampaignMember")]
class CampaignMember extends AbstractModel
{
    #[Relation(
        class: Campaign::class,
        field: "CampaignId",
        name: "Campaign"
    )]
    protected $campaign;

    /**
     #[Field(name: "CampaignId")]
     */
    protected $campaignId;

    #[Relation(
        class: Contact::class,
        field: "ContactId",
        name: "Contact"
    )]
    protected $contact;

    /**
     #[Field(name: "ContactId")]
     */
    protected $contactId;

    #[Relation(
        class: Lead::class,
        field: "LeadId",
        name: "Lead"
    )]
    protected $lead;

    /**
     #[Field(name: "LeadId")]
     */
    protected $leadId;

    /**
     #[Field(name: "Status")]
     */
    protected $status;

    /**
     * Get campaign
     *
     * @return Campaign
     * @codeCoverageIgnore
     */
    public function getCampaign()
    {
        return $this->campaign;
    }

    /**
     * Set campaign
     *
     * @param Campaign $campaign
     *
     * @return $this
     * @codeCoverageIgnore
     */
    public function setCampaign(Campaign $campaign)
    {
        $this->campaign = $campaign;

        return $this;
    }


    /**
     * Get campaign id
     *
     * @return string
     * @codeCoverageIgnore
     */
    public function getCampaignId()
    {
        return $this->campaignId;
    }

    /**
     * Set campaign id
     *
     * @param string $campaignI
     *
     * @return $this
     * @codeCoverageIgnore
     */
    public function setCampaignId($campaignId)
    {
        $this->campaignId = $campaignId;

        return $this;
    }

    /**
     * Get contact
     *
     * @return Contact
     * @codeCoverageIgnore
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set contact
     *
     * @param Contact $contact
     *
     * @return $this
     * @codeCoverageIgnore
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact id
     *
     * @return string
     * @codeCoverageIgnore
     */
    public function getContactId()
    {
        return $this->contactId;
    }

    /**
     * Set contact id
     *
     * @param string $contactId
     *
     * @return $this
     * @codeCoverageIgnore
     */
    public function setContactId($contactId)
    {
        $this->contactId = $contactId;
    }

    /**
     * Get lead
     *
     * @return Lead
     */
    public function getLead()
    {
        return $this->lead;
    }

    /**
     * Set lead
     *
     * @param Lead $lead
     *
     * @return $this
     */
    public function setLead(Lead $lead = null)
    {
        $this->lead = $lead;

        return $this;
    }

    /**
     * Get lead id
     *
     * @return string
     * @codeCoverageIgnore
     */
    public function getLeadId()
    {
        return $this->leadId;
    }

    /**
     * Set lead id
     *
     * @param string $leadId
     *
     * @return $this
     * @codeCoverageIgnore
     */
    public function setLeadId($leadId)
    {
        $this->leadId = $leadId;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     * @codeCoverageIgnore
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return $this
     * @codeCoverageIgnore
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }
}

