<?php

namespace Ddeboer\Salesforce\MapperBundle\Tests\Mock;

use Phpforce\SoapClient\Result\SaveResult;

class SaveResultMock extends SaveResult
{
    private $id;
    private bool $success;
    private array $errors;
    private $param;

    public function __construct($id, $success = true, array $errors = array(), $param = null)
    {
        $this->id = $id;
        $this->success = $success;
        $this->errors = $errors;
        $this->param = $param;
    }
}