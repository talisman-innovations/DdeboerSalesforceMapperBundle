<?php

namespace Ddeboer\Salesforce\MapperBundle\Attribute;

use Attribute;

/**
 * Defines a Salesforce object mapping
 */
#[Attribute(Attribute::TARGET_CLASS)]
class SalesforceObject
{
    public function __construct(
        public string $name
    ) {
    }
}
