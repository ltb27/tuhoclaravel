<?php

namespace App\Providers;

use App\Demo\Demo;
use App\Services\DemoService;
use Illuminate\Support\ServiceProvider;

class DemoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singletonIf(Demo::class);
        $this->app->bind('example', function ($app) {
            return new DemoService();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
