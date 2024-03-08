<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// use Illuminate\Support\Facades\App;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        // app()->bind('first_service_provider', function ($app) {
        //     dd("This is my first service provider");
        // });

        // App::getFacadeApplication()->bind('second_service_provider', function ($app) {
        //     dd("This is my second service provider");
        // });

        // app()->bind('third_service_provider', function ($app) {
        //     dd("This is my third service provider");
        // });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
