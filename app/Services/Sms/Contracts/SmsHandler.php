<?php

namespace App\Services\Sms\Contracts;

use App\Services\Sms\BaseSmsHandler;
interface SmsHandler
{
    public function setNext(BaseSmsHandler $handler): BaseSmsHandler;
    public function handle(string $message): bool;
}
