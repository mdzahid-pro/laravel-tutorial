<?php

namespace App\Providers;

use App\Services\LaravelExampleService;
use App\Services\TestService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
//        app()->bind("laravelExampleService", function (){
//            return new LaravelExampleService('name');
//        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
