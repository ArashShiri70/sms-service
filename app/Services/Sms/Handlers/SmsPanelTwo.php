<?php

namespace App\Services\Sms\Handlers;

use App\Services\Sms\BaseSmsHandler;

class SmsPanelTwo extends BaseSmsHandler
{
    public function handle(String $message): bool
    {
        echo "Trying to send via Panel Two...\n";
        $success = rand(0, 1); // API Call Logic
        if ($success) {
            echo "Message sent via Panel Two.\n";
            return true;
        }
        echo "Panel Two failed.\n";
        return parent::handle($message);
    }
}
