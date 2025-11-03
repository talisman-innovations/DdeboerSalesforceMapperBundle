<?php

namespace Ddeboer\Salesforce\MapperBundle\Model;

use Ddeboer\Salesforce\MapperBundle\Attribute\SalesforceObject;
use Ddeboer\Salesforce\MapperBundle\Attribute\Field;
use Ddeboer\Salesforce\MapperBundle\Attribute\Relation;

/**
 * Default opportunity model
 *
 * You can extend this class to incorporate custom fields on the Salesforce
 * opportunity object.
 */
#[SalesforceObject(name: "Opportunity")]
class Opportunity extends AbstractModel
{
    #[Relation(
        field: "AccountId",
        name: "Account",
        class: Account::class
    )]
    protected ?Account $account = null;

    #[Field(name: "AccountId")]
    protected ?string $accountId = null;

    protected mixed $accountPartners = null;

    protected mixed $activityHistories = null;

    #[Field(name: "Amount")]
    protected ?float $amount = null;

    protected mixed $attachments = null;

    protected mixed $campaign = null;

    #[Field(name: "CampaignId")]
    protected ?string $campaignId = null;

    #[Field(name: "CloseDate")]
    protected mixed $closeDate = null;

    #[Field(name: "Description")]
    protected ?string $description = null;

    protected mixed $events = null;

    protected mixed $feedSubscriptionsForEntity = null;

    protected mixed $feeds = null;

    protected ?string $fiscal = null;

    protected ?int $fiscalQuarter = null;

    #[Field(name: "FiscalYear")]
    protected ?int $fiscalYear = null;

    protected ?string $forecastCategory = null;

    protected ?string $forecastCategoryName = null;

    #[Field(name: "HasOpportunityLineItem")]
    protected ?bool $hasOpportunityLineItem = null;

    protected mixed $histories = null;

    #[Field(name: "IsClosed")]
    protected ?bool $isClosed = null;

    #[Field(name: "IsDeleted")]
    protected ?bool $isDeleted = null;

    #[Field(name: "IsWon")]
    protected ?bool $isWon = null;

    #[Field(name: "LastActivityDate")]
    protected ?\DateTime $lastActivityDate = null;

    #[Field(name: "LeadSource")]
    protected ?string $leadSource = null;

    #[Field(name: "Name")]
    protected ?string $name = null;

    #[Field(name: "NextStep")]
    protected ?string $nextStep = null;

    protected mixed $notes = null;

    protected mixed $notesAndAttachments = null;

    protected mixed $openActivities = null;

    protected mixed $opportunityCompetitors = null;

    protected mixed $opportunityContactRoles = null;

    protected mixed $opportunityHistories = null;

    protected mixed $opportunityLineItems = null;

    protected mixed $opportunityPartnersFrom = null;

    #[Relation(
        field: "OwnerId",
        name: "Owner",
        class: User::class
    )]
    protected ?User $owner = null;

    #[Field(name: "OwnerId")]
    protected ?string $ownerId = null;

    protected mixed $partners = null;

    protected mixed $pricebook2 = null;

    protected mixed $pricebook2Id = null;

    #[Field(name: "Probability")]
    protected ?float $probability = null;

    protected mixed $processInstances = null;

    protected mixed $processSteps = null;

    protected mixed $recordType = null;

    #[Field(name: "RecordTypeId")]
    protected ?string $recordTypeId = null;

    protected mixed $shares = null;

    #[Field(name: "StageName")]
    protected ?string $stageName = null;

    protected mixed $tags = null;

    protected mixed $tasks = null;

    #[Field(name: "Type")]
    protected ?string $type = null;

    /**
     *
     * @return Account
     */
    public function getAccount()
    {
        return $this->account;
    }

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

    public function getAccountPartners()
    {
        return $this->accountPartners;
    }

    public function setAccountPartners($accountPartners)
    {
        $this->accountPartners = $accountPartners;
        return $this;
    }

    public function getActivityHistories()
    {
        return $this->activityHistories;
    }

    public function setActivityHistories($activityHistories)
    {
        $this->activityHistories = $activityHistories;
        return $this;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    public function getAttachments()
    {
        return $this->attachments;
    }

    public function setAttachments($attachments)
    {
        $this->attachments = $attachments;
        return $this;
    }

    public function getCampaign()
    {
        return $this->campaign;
    }

    public function setCampaign($campaign)
    {
        $this->campaign = $campaign;
        return $this;
    }

    public function getCampaignId()
    {
        return $this->campaignId;
    }

    public function setCampaignId($campaignId)
    {
        $this->campaignId = $campaignId;
        return $this;
    }

    public function getCloseDate()
    {
        return $this->closeDate;
    }

    public function setCloseDate($closeDate)
    {
        $this->closeDate = $closeDate;
        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    public function getEvents()
    {
        return $this->events;
    }

    public function setEvents($events)
    {
        $this->events = $events;
        return $this;
    }

    public function getFeedSubscriptionsForEntity()
    {
        return $this->feedSubscriptionsForEntity;
    }

    public function setFeedSubscriptionsForEntity($feedSubscriptionsForEntity)
    {
        $this->feedSubscriptionsForEntity = $feedSubscriptionsForEntity;
        return $this;
    }

    public function getFeeds()
    {
        return $this->feeds;
    }

    public function setFeeds($feeds)
    {
        $this->feeds = $feeds;
        return $this;
    }

    public function getFiscal()
    {
        return $this->fiscal;
    }

    public function setFiscal($fiscal)
    {
        $this->fiscal = $fiscal;
        return $this;
    }

    public function getFiscalQuarter()
    {
        return $this->fiscalQuarter;
    }

    public function setFiscalQuarter($fiscalQuarter)
    {
        $this->fiscalQuarter = $fiscalQuarter;
        return $this;
    }

    public function getFiscalYear()
    {
        return $this->fiscalYear;
    }

    public function getForecastCategory()
    {
        return $this->forecastCategory;
    }

    public function setForecastCategory($forecastCategory)
    {
        $this->forecastCategory = $forecastCategory;
        return $this;
    }

    public function getForecastCategoryName()
    {
        return $this->forecastCategoryName;
    }

    public function setForecastCategoryName($forecastCategoryName)
    {
        $this->forecastCategoryName = $forecastCategoryName;
        return $this;
    }

    public function getHasOpportunityLineItem()
    {
        return $this->hasOpportunityLineItem;
    }

    public function getHistories()
    {
        return $this->histories;
    }

    public function setHistories($histories)
    {
        $this->histories = $histories;
        return $this;
    }

    public function isClosed()
    {
        return $this->isClosed;
    }

    public function isDeleted()
    {
        return $this->isDeleted;
    }

    public function isWon()
    {
        return $this->isWon;
    }

    public function getLastActivityDate()
    {
        return $this->lastActivityDate;
    }

    public function setLastActivityDate($lastActivityDate)
    {
        $this->lastActivityDate = $lastActivityDate;
        return $this;
    }

    public function getLeadSource()
    {
        return $this->leadSource;
    }

    public function setLeadSource($leadSource)
    {
        $this->leadSource = $leadSource;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getNextStep()
    {
        return $this->nextStep;
    }

    public function setNextStep($nextStep)
    {
        $this->nextStep = $nextStep;
        return $this;
    }

    public function getNotes()
    {
        return $this->notes;
    }

    public function setNotes($notes)
    {
        $this->notes = $notes;
        return $this;
    }

    public function getNotesAndAttachments()
    {
        return $this->notesAndAttachments;
    }

    public function setNotesAndAttachments($notesAndAttachments)
    {
        $this->notesAndAttachments = $notesAndAttachments;
        return $this;
    }

    public function getOpenActivities()
    {
        return $this->openActivities;
    }

    public function setOpenActivities($openActivities)
    {
        $this->openActivities = $openActivities;
        return $this;
    }

    public function getOpportunityCompetitors()
    {
        return $this->opportunityCompetitors;
    }

    public function setOpportunityCompetitors($opportunityCompetitors)
    {
        $this->opportunityCompetitors = $opportunityCompetitors;
        return $this;
    }

    public function getOpportunityContactRoles()
    {
        return $this->opportunityContactRoles;
    }

    public function setOpportunityContactRoles($opportunityContactRoles)
    {
        $this->opportunityContactRoles = $opportunityContactRoles;
        return $this;
    }

    public function getOpportunityHistories()
    {
        return $this->opportunityHistories;
    }

    public function setOpportunityHistories($opportunityHistories)
    {
        $this->opportunityHistories = $opportunityHistories;
        return $this;
    }

    public function getOpportunityLineItems()
    {
        return $this->opportunityLineItems;
    }

    public function setOpportunityLineItems($opportunityLineItems)
    {
        $this->opportunityLineItems = $opportunityLineItems;
        return $this;
    }

    public function getOpportunityPartnersFrom()
    {
        return $this->opportunityPartnersFrom;
    }

    public function setOpportunityPartnersFrom($opportunityPartnersFrom)
    {
        $this->opportunityPartnersFrom = $opportunityPartnersFrom;
        return $this;
    }

    public function getOwner()
    {
        return $this->owner;
    }

    public function setOwner(User $owner)
    {
        $this->owner = $owner;
        $this->ownerId = $owner->getId();
        return $this;
    }

    public function getOwnerId()
    {
        return $this->ownerId;
    }

    public function setOwnerId($ownerId)
    {
        $this->ownerId = $ownerId;
        return $this;
    }

    public function getPartners()
    {
        return $this->partners;
    }

    public function setPartners($partners)
    {
        $this->partners = $partners;
        return $this;
    }

    public function getPricebook2()
    {
        return $this->pricebook2;
    }

    public function setPricebook2($pricebook2)
    {
        $this->pricebook2 = $pricebook2;
        return $this;
    }

    public function getPricebook2Id()
    {
        return $this->pricebook2Id;
    }

    public function setPricebook2Id($pricebook2Id)
    {
        $this->pricebook2Id = $pricebook2Id;
        return $this;
    }

    public function getProbability()
    {
        return $this->probability;
    }

    public function setProbability($probability)
    {
        $this->probability = $probability;
        return $this;
    }

    public function getProcessInstances()
    {
        return $this->processInstances;
    }

    public function setProcessInstances($processInstances)
    {
        $this->processInstances = $processInstances;
        return $this;
    }

    public function getProcessSteps()
    {
        return $this->processSteps;
    }

    public function setProcessSteps($processSteps)
    {
        $this->processSteps = $processSteps;
        return $this;
    }

    public function getRecordType()
    {
        return $this->recordType;
    }

    public function setRecordType($recordType)
    {
        $this->recordType = $recordType;
        return $this;
    }

    public function getRecordTypeId()
    {
        return $this->recordTypeId;
    }

    public function setRecordTypeId($recordTypeId)
    {
        $this->recordTypeId = $recordTypeId;
        return $this;
    }

    public function getShares()
    {
        return $this->shares;
    }

    public function setShares($shares)
    {
        $this->shares = $shares;
        return $this;
    }

    public function getStageName()
    {
        return $this->stageName;
    }

    public function setStageName($stageName)
    {
        $this->stageName = $stageName;
        return $this;
    }

    public function getTags()
    {
        return $this->tags;
    }

    public function setTags($tags)
    {
        $this->tags = $tags;
        return $this;
    }

    public function getTasks()
    {
        return $this->tasks;
    }

    public function setTasks($tasks)
    {
        $this->tasks = $tasks;
        return $this;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
}