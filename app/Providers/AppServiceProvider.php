<?php

namespace App\Providers;

use App\Repositories\DistrictRepository;
use App\Repositories\Interfaces\IDistrictRepository;
use App\Repositories\Interfaces\IProvinceRepository;
use App\Repositories\Interfaces\IWardRepository;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Repositories\ProvinceRepository;
use App\Repositories\UserRepository;
use App\Repositories\WardRepository;
use App\Services\Interfaces\UserServiceInterface;
use App\Services\UserService;
use Illuminate\Support\ServiceProvider;
use Schema;

class AppServiceProvider extends ServiceProvider
{
    protected array $serviceBinding = [
        UserServiceInterface::class => UserService::class,
        UserRepositoryInterface::class => UserRepository::class,
        IProvinceRepository::class => ProvinceRepository::class,
        IDistrictRepository::class => DistrictRepository::class,
        IWardRepository::class => WardRepository::class
    ];

    /**
     * Register any application services.
     */
    public function register(): void
    {
        foreach ($this->serviceBinding as $interface => $class) {
            $this->app->scopedIf($interface, $class);
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
