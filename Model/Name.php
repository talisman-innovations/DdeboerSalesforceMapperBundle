<?php

namespace Ddeboer\Salesforce\MapperBundle\Model;

use Ddeboer\Salesforce\MapperBundle\Attribute\SalesforceObject;
use Ddeboer\Salesforce\MapperBundle\Attribute\Field;
use Ddeboer\Salesforce\MapperBundle\Attribute\Relation;

/**
 * Default name model
 *
 * You can extend this class to incorporate custom fields on the Salesforce
 * name object.
 * 
 */
#[SalesforceObject(name: "Name")]
class Name 
{
    #[Field(name: "Id")]
    protected $id;

    #[Field(name: "Alias")]
    protected $alias;

    #[Field(name: "Email")]
    protected $email;

    #[Field(name: "FirstName")]
    protected $firstName;
    
    #[Field(name: "IsActive")]
    protected $isActive;        
    
    #[Field(name: "LastName")]
    protected $lastName;
    
    #[Field(name: "Name")]
    protected $name;

    #[Field(name: "Phone")]
    protected $phone;

    #[Field(name: "ProfileId")]
    protected $profileId;

    protected $profile;

    #[Field(name: "Title")]
    protected $title;

    #[Field(name: "Type")]
    protected $type;

    protected $userRole;

    protected $userRoleId;

    #[Field(name: "Username")]
    protected $username;
    protected $FirstName;

    public function getId()
    {
        return $this->id;
    }

    public function getAlias()
    {
        return $this->alias;
    }

    public function setAlias($alias)
    {
        $this->alias = $alias;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getFirstName()
    {
        return $this->FirstName;
    }

    public function setFirstName($firstName)
    {
        $this->FirstName = $firstName;
    }

    public function getIsActive()
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

    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function getProfileId()
    {
        return $this->profileId;
    }

    public function setProfileId($profileId)
    {
        $this->profileId = $profileId;
    }

    public function getProfile()
    {
        return $this->profile;
    }

    public function setProfile($profile)
    {
        $this->profile = $profile;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getUserRole()
    {
        return $this->userRole;
    }

    public function setUserRole($userRole)
    {
        $this->userRole = $userRole;
    }

    public function getUserRoleId()
    {
        return $this->userRoleId;
    }

    public function setUserRoleId($userRoleId)
    {
        $this->userRoleId = $userRoleId;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }
}