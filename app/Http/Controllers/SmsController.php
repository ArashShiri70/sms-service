<?php

namespace App\Http\Controllers;

use App\Services\Sms\SmsService;

class SmsController extends Controller
{
    private SmsService $smsService;

    public function __construct(SmsService $smsService)
    {
        $this->smsService = $smsService;
    }

    public function sendSms()
    {
        $message = "Hello, this is a test SMS!";
        $result = $this->smsService->sendSms($message);

        return $result ? "Message sent successfully!" : "Failed to send the message.";
    }
}

