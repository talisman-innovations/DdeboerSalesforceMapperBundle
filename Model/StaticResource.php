<?php

namespace Ddeboer\Salesforce\MapperBundle\Model;

use Ddeboer\Salesforce\MapperBundle\Attribute\SalesforceObject;
use Ddeboer\Salesforce\MapperBundle\Attribute\Field;
use Ddeboer\Salesforce\MapperBundle\Attribute\Relation;
use Ddeboer\Salesforce\MapperBundle\Response\MappedRecordIterator;

/**
 * Salesforce standard account object
 *
 * You can extend this class to incorporate custom fields on the object.
 *
 */
#[SalesforceObject(name: "StaticResource")]
class StaticResource extends AbstractModel
{
    #[Field(name: "Body")]
    protected $body;

    #[Field(name: "BodyLength")]
    protected $bodyLength;

    #[Field(name: "CacheControl")]
    protected $cacheControl;

    #[Field(name: "ContentType")]
    protected $contentType;

    #[Field(name: "Description")]
    protected $description;

    #[Field(name: "Name")]
    protected $name;

    #[Field(name: "NamespacePrefix")]
    protected $namespacePrefix;

    public function getContentType()
    {
        return $this->contentType;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function setBody($body)
    {
        $this->body = $body;
    }

    public function getBodyLength()
    {
        return $this->bodyLength;
    }

    public function setBodyLength($bodyLength)
    {
        $this->bodyLength = $bodyLength;
    }

    public function getCacheControl()
    {
        return $this->cacheControl;
    }

    public function setCacheControl($cacheControl)
    {
        $this->cacheControl = $cacheControl;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getNamespacePrefix()
    {
        return $this->namespacePrefix;
    }

    public function setNamespacePrefix($namespacePrefix)
    {
        $this->namespacePrefix = $namespacePrefix;
    }
}