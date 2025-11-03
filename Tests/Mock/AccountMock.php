<?php

namespace Ddeboer\Salesforce\MapperBundle\Tests\Mock;

use Ddeboer\Salesforce\MapperBundle\Attribute\SalesforceObject;
use Ddeboer\Salesforce\MapperBundle\Attribute\Field;
use Ddeboer\Salesforce\MapperBundle\Attribute\Relation;

#[SalesforceObject(name: "Account")]
class AccountMock
{
    #[Field(name: "Id")]
    protected $id;

    #[Field(name: "Name")]
    protected $name;

    #[Relation(
        name: "AccountContactRoles",
        class: AccountContactRoleMock::class
    )]
    protected $accountContactRoles;

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAccountContactRoles()
    {
        return $this->accountContactRoles;
    }

    public function setAccountContactRoles($accountContactRoles)
    {
        $this->accountContactRoles = $accountContactRoles;
    }
}