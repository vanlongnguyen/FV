<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Src\addressHandler;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(addressHandler::class, function ($app) {
            return new addressHandler();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
