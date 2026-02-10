<?php

namespace App\Providers;

use App\Http\Services\Logs\VisitorLoggerService;
use App\Http\Services\VisitorService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(("VisitorService"), function ($app) {
            return new VisitorService();
        });
        $this->app->singleton(("VisitorLoggerService"), function ($app) {
            return new VisitorLoggerService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
