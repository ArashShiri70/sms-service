<?php


namespace App\Services\Sms\Handlers;

use App\Services\Sms\BaseSmsHandler;

class SmsPanelOne extends BaseSmsHandler
{
    public function handle(String $message): bool
    {
        echo "Trying to send via Panel One...\n";
        $success = rand(0, 1); // API Call Logic
        if ($success) {
            echo "Message sent via Panel One.\n";
            return true;
        }
        echo "Panel One failed.\n";
        return parent::handle($message);
    }
}
