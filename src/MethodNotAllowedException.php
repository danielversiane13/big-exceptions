<?php

namespace Danielversiane13\BigExceptions;

class MethodNotAllowedException extends AbstractException
{
    public function __construct(string $message)
    {
        parent::__construct($message, 405, [], env('APP_MAP_CODE', 0));
    }
}
