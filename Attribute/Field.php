<?php

namespace Ddeboer\Salesforce\MapperBundle\Attribute;

use Attribute;

/**
 * Defines a Salesforce field mapping
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class Field
{
    public function __construct(
        public string $name
    ) {
    }
}
