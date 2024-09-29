<?php

namespace App\Facades;

use App\Demo\Demo;
use Illuminate\Support\Facades\Facade;

/**
 * @see Demo
 */
class DemoExample extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return Demo::class;
    }
}
