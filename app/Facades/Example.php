<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class Example extends Facade
{
    /** @method static string doSomething() */
    protected static function getFacadeAccessor(): string
    {
        return 'example';
    }
}
