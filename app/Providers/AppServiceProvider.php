<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Schema;

class AppServiceProvider extends ServiceProvider
{
    public $serviceBinding = [
        'App\Services\Interfaces\UserServiceInterface' => 'App\Services\UserService',
    ];

    /**
     * Register any application services.
     */
    public function register(): void
    {
        foreach ($this->serviceBinding as $interface => $class) {
            $this->app->bind($interface, $class);
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // re-define default length of string() , means varchar(191)
        Schema::defaultStringLength(191);
    }
}
