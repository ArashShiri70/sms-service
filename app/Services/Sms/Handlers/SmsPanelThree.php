<?php

namespace App\Services\Sms\Handlers;

use App\Services\Sms\BaseSmsHandler;

class SmsPanelThree extends BaseSmsHandler
{
    public function handle(String $message): bool
    {
        echo "Trying to send via Panel Three...\n";
        $success = rand(0, 1); // API Call Logic
        if ($success) {
            echo "Message sent via Panel Three.\n";
            return true;
        }
        echo "Panel Three failed.\n";
        return parent::handle($message);
    }
}
