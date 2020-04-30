<?php

namespace jr\countif;

use Throwable;

class InvalidDirectoryException extends \Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct('could not read directory '.$message, $code, $previous);
    }
}