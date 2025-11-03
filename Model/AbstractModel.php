<?php

namespace Ddeboer\Salesforce\MapperBundle\Model;

use Ddeboer\Salesforce\MapperBundle\Attribute\Field;

/**
 * Layer supertype for Salesforce objects
 *
 * @author David de Boer <david@ddeboer.nl>
 */
abstract class AbstractModel
{
    /**
     * Object ID
     */
    #[Field(name: "Id")]
    protected ?string $id = null;

    /**
     * Created by user
     */
    protected ?User $createdBy = null;

    /**
     * Created by user ID
     */
    protected ?string $createdById = null;

    /**
     * Created date
     */
    #[Field(name: "CreatedDate")]
    protected ?\DateTime $createdDate = null;

    /**
     * Last modified by user ID
     */
    #[Field(name: "LastModifiedById")]
    protected ?string $lastModifiedById = null;

    /**
     * Last modified date
     */
    #[Field(name: "LastModifiedDate")]
    protected ?\DateTime $lastModifiedDate = null;

    /**
     * System modification timestamp
     */
    #[Field(name: "SystemModstamp")]
    protected ?\DateTime $systemModstamp = null;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return User
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * @return string
     */
    public function getCreatedById()
    {
        return $this->createdById;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * @return string
     */
    public function getLastModifiedById()
    {
        return $this->lastModifiedById;
    }

    /**
     * @return \DateTime
     */
    public function getLastModifiedDate()
    {
        return $this->lastModifiedDate;
    }

    /**
     * @return \DateTime
     */
    public function getSystemModstamp()
    {
        return $this->systemModstamp;
    }
}