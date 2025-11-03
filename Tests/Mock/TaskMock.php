<?php

namespace Ddeboer\Salesforce\MapperBundle\Tests\Mock;

use Ddeboer\Salesforce\MapperBundle\Attribute\SalesforceObject;
use Ddeboer\Salesforce\MapperBundle\Attribute\Field;

#[SalesforceObject(name: "Task")]
class TaskMock
{
    #[Field(name: "Id")]
    protected $id;

    #[Field(name: "Subject")]
    protected $subject;

    public function getId()
    {
        return $this->id;
    }

    public function getSubject()
    {
        return $this->subject;
    }

    public function setSubject($subject)
    {
        $this->subject = $subject;
    }
}