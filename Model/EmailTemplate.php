<?php

namespace Ddeboer\Salesforce\MapperBundle\Model;

use Ddeboer\Salesforce\MapperBundle\Attribute\SalesforceObject;
use Ddeboer\Salesforce\MapperBundle\Attribute\Field;
use Ddeboer\Salesforce\MapperBundle\Attribute\Relation;
use Ddeboer\Salesforce\MapperBundle\Response\MappedRecordIterator;

/**
 * Salesforce standard email template object
 *
 * You can extend this class to incorporate custom fields on the object.
 *
 */
#[SalesforceObject(name: "EmailTemplate")]
class EmailTemplate extends AbstractModel
{
    #[Field(name: "Body")]
    protected $body;

    #[Field(name: "Name")]
    protected $name;

    #[Field(name: "DeveloperName")]
    protected $developerName;

    #[Field(name: "HtmlValue")]
    protected $htmlValue;
    
    #[Field(name: "Subject")]
    protected $subject;

    public function getBody()
    {
        return $this->body;
    }

    public function setBody($body)
    {
        $this->body = $body;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getSubject()
    {
        return $this->subject;
    }

    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    public function getHtmlValue()
    {
        return $this->htmlValue;
    }

    public function setHtmlValue($htmlValue)
    {
        $this->htmlValue = $htmlValue;
    }

    public function getDeveloperName()
    {
        return $this->developerName;
    }

    public function setDeveloperName($developerName)
    {
        $this->developerName = $developerName;
    }
}