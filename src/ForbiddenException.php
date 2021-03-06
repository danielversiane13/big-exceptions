<?php

namespace Danielversiane13\BigExceptions;

class ForbiddenException extends BigException
{
    public function __construct(string $message, array $errors = [], int $mapCode = 0)
    {
        parent::__construct($message, 403, $errors, $mapCode ?: env('APP_MAP_CODE', 0));
    }
}
