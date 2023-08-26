<?php

namespace App\Facades;

use App\Services\LaravelExampleService;
use Illuminate\Support\Facades\Facade;

class LaravelExampleServiceFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
//        return LaravelExampleService::class;
        return "laravelExampleService";
    }
}
