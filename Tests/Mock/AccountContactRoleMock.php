<?php

namespace Ddeboer\Salesforce\MapperBundle\Tests\Mock;

use Ddeboer\Salesforce\MapperBundle\Attribute\SalesforceObject;
use Ddeboer\Salesforce\MapperBundle\Attribute\Field;
use Ddeboer\Salesforce\MapperBundle\Attribute\Relation;

#[SalesforceObject(name: "AccountContactRole")]
class AccountContactRoleMock
{
    #[Field(name: "Id")]
    protected $id;

    #[Relation(
        field: "AccountId",
        name: "Account",
        class: AccountMock::class
    )]
    protected $account;

    #[Relation(
        field: "ContactId",
        name: "Contact",
        class: ContactMock::class
    )]
    protected $contact;
}