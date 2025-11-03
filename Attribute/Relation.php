<?php

namespace Ddeboer\Salesforce\MapperBundle\Attribute;

use Attribute;

/**
 * Defines a relation between Salesforce objects
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class Relation
{
    public function __construct(
        public string $class,
        public ?string $field = null,
        public ?string $name = null
    ) {
    }
}
