<?php

namespace Ddeboer\Salesforce\MapperBundle\Model;

use Ddeboer\Salesforce\MapperBundle\Attribute\SalesforceObject;
use Ddeboer\Salesforce\MapperBundle\Attribute\Field;
use Ddeboer\Salesforce\MapperBundle\Attribute\Relation;

/**
 * Salesforce user object
 *
 */
#[SalesforceObject(name: "User")]
class User extends AbstractModel
{
    #[Field(name: "AboutMe")]
    protected $aboutMe;

    /**
     * @var tnsID
     */
    protected $accounts;

    protected $alias;

    /**
     * @var string
     */
    protected $callCenterId;

    #[Field(name: "City")]
    protected $city;

    #[Field(name: "CommunityNickName")]
    protected $communityNickname;

    #[Field(name: "CompanyName")]
    protected $companyName;

    /**
     * @var ensContact
     */
    protected $contact;

    /**
     * @var tnsID
     */
    protected $contactId;

    /**
     * @var tnsQueryResult
     */
    protected $contractsSigned;

    #[Field(name: "Country")]
    protected $country;

    /**
     * @var string
     */
    protected $defaultGroupNotificationFrequency;

    /**
     * @var string
     */
    protected $delegatedApproverId;

    /**
     * @var tnsQueryResult
     */
    protected $delegatedUsers;

    #[Field(name: "Department")]
    protected $department;

    /**
     * @var string
     */
    protected $digestFrequency;

    /**
     * @var string
     */
    protected $division;

    #[Field(name: "Email")]
    protected $email;

    /**
     * @var string
     */
    protected $emailEncodingKey;

    /**
     * @var string
     */
    protected $employeeNumber;

    #[Field(name: "Extension")]
    protected $extension;

    #[Field(name: "Fax")]
    protected $fax;

    /**
     * @var string
     */
    protected $federationIdentifier;

    /**
     * @var tnsQueryResult
     */
    protected $feedSubscriptions;

    /**
     * @var tnsQueryResult
     */
    protected $feedSubscriptionsForEntity;

    /**
     * @var tnsQueryResult
     */
    protected $feeds;

    #[Field(name: "FirstName")]
    protected $firstName;

    /**
     * @var xsdboolean
     */
    protected $forecastEnabled;

    #[Field(name: "FullPhotoUrl")]
    protected $fullPhotoUrl;

    #[Field(name: "IsActive")]
    protected $isActive;

    #[Field(name: "LastName")]
    protected $lastName;

    #[Field(name: "Name")]
    protected $name;

    #[Field(name: "Phone")]
    protected $phone;

    /**
     * @var string
     */
    protected $languageLocaleKey;

    #[Field(name: "LastLoginDate")]
    protected $lastLoginDate;

    #[Field(name: "LastPasswordChangeDate")]
    protected $lastPasswordChangeDate;

    /**
     * @var string
     */
    protected $localeSidKey;

    /**
     * @var User
     */
    protected $manager;

    /**
     * @var string
     */
    protected $managerId;

    #[Field(name: "MobilePhone")]
    protected $mobilePhone;

    /**
     * @var \DateTime
     */
    protected $offlinePdaTrialExpirationDate;

    /**
     * @var xsddateTime
     */
    protected $offlineTrialExpirationDate;

    #[Field(name: "PostalCode")]
    protected $postalCode;

     #[Field(name: "ProfileId")]
    protected $profileId;

    protected $profile;

    #[Field(name: "Title")]
    protected $title;

    #[Field(name: "ReceivesAdminInfoEmails")]
    protected $receivesAdminInfoEmails;

    #[Field(name: "ReceivesInfoEmails")]
    protected $receivesInfoEmails;

    #[Field(name: "SmallPhotoUrl")]
    protected $smallPhotoUrl;

    #[Field(name: "State")]
    protected $state;

    #[Field(name: "Street")]
    protected $street;

    /**
     * @var string
     */
    protected $timeZoneSidKey;

    #[Field(name: "Username")]
    protected $username;

    /**
     * @var xsdboolean
     */
    protected $userPermissionsAvantgoUser;

    /**
     * @var xsdboolean
     */
    protected $userPermissionsCallCenterAutoLogin;

    /**
     * @var xsdboolean
     */
    protected $userPermissionsMarketingUser;

    /**
     * @var xsdboolean
     */
    protected $userPermissionsMobileUser;

    /**
     * @var xsdboolean
     */
    protected $userPermissionsOfflineUser;

    /**
     * @var xsdboolean
     */
    protected $userPermissionsSFContentUser;

    /**
     * @var tnsQueryResult
     */
    protected $userPreferences;

    /**
     * @var xsdboolean
     */
    protected $userPreferencesActivityRemindersPopup;

    /**
     * @var xsdboolean
     */
    protected $userPreferencesApexPagesDeveloperMode;

    /**
     * @var xsdboolean
     */
    protected $userPreferencesDisableAutoSubForFeeds;

    /**
     * @var xsdboolean
     */
    protected $userPreferencesEventRemindersCheckboxDefault;

    /**
     * @var xsdboolean
     */
    protected $userPreferencesReminderSoundOff;

    /**
     * @var xsdboolean
     */
    protected $userPreferencesTaskRemindersCheckboxDefault;

    #[Field(name: "UserType")]
    protected $userType;

    public function getAboutMe()
    {
        return $this->aboutMe;
    }

    public function setAboutMe($aboutMe)
    {
        $this->aboutMe = $aboutMe;
    }

    public function getAccounts()
    {
        return $this->accounts;
    }

    public function setAccounts($accounts)
    {
        $this->accounts = $accounts;
    }

    public function getCallCenterId()
    {
        return $this->callCenterId;
    }

    public function setCallCenterId($callCenterId)
    {
        $this->callCenterId = $callCenterId;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

    public function getCommunityNickname()
    {
        return $this->communityNickname;
    }

    public function setCommunityNickname($communityNickname)
    {
        $this->communityNickname = $communityNickname;
    }

    public function getCompanyName()
    {
        return $this->companyName;
    }

    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
    }

    public function getContact()
    {
        return $this->contact;
    }

    public function setContact($contact)
    {
        $this->contact = $contact;
    }

    public function getContactId()
    {
        return $this->contactId;
    }

    public function setContactId($contactId)
    {
        $this->contactId = $contactId;
    }

    public function getContractsSigned()
    {
        return $this->contractsSigned;
    }

    public function setContractsSigned($contractsSigned)
    {
        $this->contractsSigned = $contractsSigned;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function setCountry($country)
    {
        $this->country = $country;
    }

    public function getDefaultGroupNotificationFrequency()
    {
        return $this->defaultGroupNotificationFrequency;
    }

    public function setDefaultGroupNotificationFrequency($defaultGroupNotificationFrequency)
    {
        $this->defaultGroupNotificationFrequency = $defaultGroupNotificationFrequency;
    }

    public function getDelegatedApproverId()
    {
        return $this->delegatedApproverId;
    }

    public function setDelegatedApproverId($delegatedApproverId)
    {
        $this->delegatedApproverId = $delegatedApproverId;
    }

    public function getDelegatedUsers()
    {
        return $this->delegatedUsers;
    }

    public function setDelegatedUsers($delegatedUsers)
    {
        $this->delegatedUsers = $delegatedUsers;
    }

    public function getDepartment()
    {
        return $this->department;
    }

    public function setDepartment($department)
    {
        $this->department = $department;
    }

    public function getDigestFrequency()
    {
        return $this->digestFrequency;
    }

    public function setDigestFrequency($digestFrequency)
    {
        $this->digestFrequency = $digestFrequency;
    }

    public function getDivision()
    {
        return $this->division;
    }

    public function setDivision($division)
    {
        $this->division = $division;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmailEncodingKey()
    {
        return $this->emailEncodingKey;
    }

    public function setEmailEncodingKey($emailEncodingKey)
    {
        $this->emailEncodingKey = $emailEncodingKey;
    }

    public function getEmployeeNumber()
    {
        return $this->employeeNumber;
    }

    public function setEmployeeNumber($employeeNumber)
    {
        $this->employeeNumber = $employeeNumber;
    }

    public function getExtension()
    {
        return $this->extension;
    }

    public function setExtension($extension)
    {
        $this->extension = $extension;
    }

    public function getFax()
    {
        return $this->fax;
    }

    public function setFax($fax)
    {
        $this->fax = $fax;
    }

    public function getFederationIdentifier()
    {
        return $this->federationIdentifier;
    }

    public function setFederationIdentifier($federationIdentifier)
    {
        $this->federationIdentifier = $federationIdentifier;
    }

    public function getFeedSubscriptions()
    {
        return $this->feedSubscriptions;
    }

    public function setFeedSubscriptions($feedSubscriptions)
    {
        $this->feedSubscriptions = $feedSubscriptions;
    }

    public function getFeedSubscriptionsForEntity()
    {
        return $this->feedSubscriptionsForEntity;
    }

    public function setFeedSubscriptionsForEntity($feedSubscriptionsForEntity)
    {
        $this->feedSubscriptionsForEntity = $feedSubscriptionsForEntity;
    }

    public function getFeeds()
    {
        return $this->feeds;
    }

    public function setFeeds($feeds)
    {
        $this->feeds = $feeds;
    }

    public function getForecastEnabled()
    {
        return $this->forecastEnabled;
    }

    public function setForecastEnabled($forecastEnabled)
    {
        $this->forecastEnabled = $forecastEnabled;
    }

    public function getFullPhotoUrl()
    {
        return $this->fullPhotoUrl;
    }

    public function setFullPhotoUrl($fullPhotoUrl)
    {
        $this->fullPhotoUrl = $fullPhotoUrl;
    }

    public function getAlias()
    {
        return $this->alias;
    }

    public function setAlias($alias)
    {
        $this->alias = $alias;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getIsActive()
    {
        return $this->isActive;
    }

    public function isActive()
    {
        return $this->isActive;
    }

    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getLanguageLocaleKey()
    {
        return $this->languageLocaleKey;
    }

    public function setLanguageLocaleKey($languageLocaleKey)
    {
        $this->languageLocaleKey = $languageLocaleKey;
    }

    public function getLastLoginDate()
    {
        return $this->lastLoginDate;
    }

    public function getLastPasswordChangeDate()
    {
        return $this->lastPasswordChangeDate;
    }

    public function getLocaleSidKey()
    {
        return $this->localeSidKey;
    }

    public function setLocaleSidKey($localeSidKey)
    {
        $this->localeSidKey = $localeSidKey;
    }

    public function getManager()
    {
        return $this->manager;
    }

    public function setManager($manager)
    {
        $this->manager = $manager;
    }

    public function getManagerId()
    {
        return $this->managerId;
    }

    public function setManagerId($managerId)
    {
        $this->managerId = $managerId;
    }

    public function getMobilePhone()
    {
        return $this->mobilePhone;
    }

    public function setMobilePhone($mobilePhone)
    {
        $this->mobilePhone = $mobilePhone;
    }

    public function getOfflinePdaTrialExpirationDate()
    {
        return $this->offlinePdaTrialExpirationDate;
    }

    public function setOfflinePdaTrialExpirationDate($offlinePdaTrialExpirationDate)
    {
        $this->offlinePdaTrialExpirationDate = $offlinePdaTrialExpirationDate;
    }

    public function getOfflineTrialExpirationDate()
    {
        return $this->offlineTrialExpirationDate;
    }

    public function setOfflineTrialExpirationDate($offlineTrialExpirationDate)
    {
        $this->offlineTrialExpirationDate = $offlineTrialExpirationDate;
    }

    public function getPostalCode()
    {
        return $this->postalCode;
    }

    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    }

    public function getReceivesAdminInfoEmails()
    {
        return $this->receivesAdminInfoEmails;
    }

    public function getReceivesInfoEmails()
    {
        return $this->receivesInfoEmails;
    }

    public function getSmallPhotoUrl()
    {
        return $this->smallPhotoUrl;
    }

    public function getState()
    {
        return $this->state;
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function getStreet()
    {
        return $this->street;
    }

    public function setStreet($street)
    {
        $this->street = $street;
    }

    public function getTimeZoneSidKey()
    {
        return $this->timeZoneSidKey;
    }

    public function setTimeZoneSidKey($timeZoneSidKey)
    {
        $this->timeZoneSidKey = $timeZoneSidKey;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getUserPermissionsAvantgoUser()
    {
        return $this->userPermissionsAvantgoUser;
    }

    public function setUserPermissionsAvantgoUser($userPermissionsAvantgoUser)
    {
        $this->userPermissionsAvantgoUser = $userPermissionsAvantgoUser;
    }

    public function getUserPermissionsCallCenterAutoLogin()
    {
        return $this->userPermissionsCallCenterAutoLogin;
    }

    public function setUserPermissionsCallCenterAutoLogin($userPermissionsCallCenterAutoLogin)
    {
        $this->userPermissionsCallCenterAutoLogin = $userPermissionsCallCenterAutoLogin;
    }

    public function getUserPermissionsMarketingUser()
    {
        return $this->userPermissionsMarketingUser;
    }

    public function setUserPermissionsMarketingUser($userPermissionsMarketingUser)
    {
        $this->userPermissionsMarketingUser = $userPermissionsMarketingUser;
    }

    public function getUserPermissionsMobileUser()
    {
        return $this->userPermissionsMobileUser;
    }

    public function setUserPermissionsMobileUser($userPermissionsMobileUser)
    {
        $this->userPermissionsMobileUser = $userPermissionsMobileUser;
    }

    public function getUserPermissionsOfflineUser()
    {
        return $this->userPermissionsOfflineUser;
    }

    public function setUserPermissionsOfflineUser($userPermissionsOfflineUser)
    {
        $this->userPermissionsOfflineUser = $userPermissionsOfflineUser;
    }

    public function getUserPermissionsSFContentUser()
    {
        return $this->userPermissionsSFContentUser;
    }

    public function setUserPermissionsSFContentUser($userPermissionsSFContentUser)
    {
        $this->userPermissionsSFContentUser = $userPermissionsSFContentUser;
    }

    public function getUserPreferences()
    {
        return $this->userPreferences;
    }

    public function setUserPreferences($userPreferences)
    {
        $this->userPreferences = $userPreferences;
    }

    public function getUserPreferencesActivityRemindersPopup()
    {
        return $this->userPreferencesActivityRemindersPopup;
    }

    public function setUserPreferencesActivityRemindersPopup($userPreferencesActivityRemindersPopup)
    {
        $this->userPreferencesActivityRemindersPopup = $userPreferencesActivityRemindersPopup;
    }

    public function getUserPreferencesApexPagesDeveloperMode()
    {
        return $this->userPreferencesApexPagesDeveloperMode;
    }

    public function setUserPreferencesApexPagesDeveloperMode($userPreferencesApexPagesDeveloperMode)
    {
        $this->userPreferencesApexPagesDeveloperMode = $userPreferencesApexPagesDeveloperMode;
    }

    public function getUserPreferencesDisableAutoSubForFeeds()
    {
        return $this->userPreferencesDisableAutoSubForFeeds;
    }

    public function setUserPreferencesDisableAutoSubForFeeds($userPreferencesDisableAutoSubForFeeds)
    {
        $this->userPreferencesDisableAutoSubForFeeds = $userPreferencesDisableAutoSubForFeeds;
    }

    public function getUserPreferencesEventRemindersCheckboxDefault()
    {
        return $this->userPreferencesEventRemindersCheckboxDefault;
    }

    public function setUserPreferencesEventRemindersCheckboxDefault($userPreferencesEventRemindersCheckboxDefault)
    {
        $this->userPreferencesEventRemindersCheckboxDefault = $userPreferencesEventRemindersCheckboxDefault;
    }

    public function getUserPreferencesReminderSoundOff()
    {
        return $this->userPreferencesReminderSoundOff;
    }

    public function setUserPreferencesReminderSoundOff($userPreferencesReminderSoundOff)
    {
        $this->userPreferencesReminderSoundOff = $userPreferencesReminderSoundOff;
    }

    public function getUserPreferencesTaskRemindersCheckboxDefault()
    {
        return $this->userPreferencesTaskRemindersCheckboxDefault;
    }

    public function setUserPreferencesTaskRemindersCheckboxDefault($userPreferencesTaskRemindersCheckboxDefault)
    {
        $this->userPreferencesTaskRemindersCheckboxDefault = $userPreferencesTaskRemindersCheckboxDefault;
    }

    public function getUserType()
    {
        return $this->userType;
    }
}