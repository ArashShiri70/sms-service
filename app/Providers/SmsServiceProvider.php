<?php

namespace App\Providers;

use App\Services\Sms\SmsService;
use Illuminate\Support\ServiceProvider;

class SmsServiceProvider extends ServiceProvider {
    public function register()
    {
        $this->app->singleton(SmsService::class, function ($app) {
            $handlers = config('sms.handlers');
            return new SmsService($handlers);
        });
    }

    public function boot()
    {
        //
    }
}
