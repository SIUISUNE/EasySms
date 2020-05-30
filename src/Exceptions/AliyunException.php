<?php


namespace EasySms\Exceptions;


class AliyunException extends \Exception
{
    public function __construct($message, $raw = [], $code = 5000)
    {
        parent::__construct($message, $raw, $code);
    }
}