<?php

namespace Ddeboer\Salesforce\MapperBundle\Tests\Mock;

use Phpforce\SoapClient\Result\QueryResult;

class QueryResultMock extends QueryResult
{
    public $size;
    public  bool $done;
    public array $records;

    public function __construct($size, $done = true, array $records = array())
    {
        $this->size = $size;
        $this->done = $done;
        $this->records = $records;
    }
}