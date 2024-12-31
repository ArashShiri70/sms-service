<?php

namespace App\Services\Sms;
use App\Services\Sms\Contracts\SmsHandler;

abstract class BaseSmsHandler Implements SmsHandler
{
    private ?SmsHandler $nextHandler = null;

    public function setNext(SmsHandler $handler): BaseSmsHandler
    {
        $this->nextHandler = $handler;
        return $handler;
    }

    public function handle(string $message): bool
    {
        if ($this->nextHandler) {
            return $this->nextHandler->handle($message);
        }
        return false;
    }
}
