<?php

namespace Ddeboer\Salesforce\MapperBundle\Tests\Mock;

use Ddeboer\Salesforce\MapperBundle\Attribute\SalesforceObject;
use Ddeboer\Salesforce\MapperBundle\Attribute\Field;

#[SalesforceObject(name: "Contact")]
class ContactMock
{
    #[Field(name: "Id")]
    protected $id;

    #[Field(name: "FirstName")]
    protected $firstName;

    #[Field(name: "LastName")]
    protected $lastName;
}