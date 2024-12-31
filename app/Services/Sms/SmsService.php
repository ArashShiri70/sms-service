<?php

namespace App\Services\Sms;

use Illuminate\Support\Arr;

class SmsService
{
    private BaseSmsHandler $chain;

    public function __construct(array $handlers)
    {
        $this->buildChain($handlers);
    }

    private function buildChain(array $handlers): void
    {
        $firstHandler = null;
        $currentHandler = null;

        foreach ($handlers as $handlerClass) {
            $handler = app($handlerClass);
            if (!$firstHandler) {
                $firstHandler = $handler;
                $currentHandler = $handler;
            } else {
                $currentHandler->setNext($handler);
                $currentHandler = $handler;
            }
        }

        $this->chain = $firstHandler;
    }

    public function sendSms(string $message): bool
    {
        return $this->chain->handle($message);
    }
}
