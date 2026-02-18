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
        $this->app->singleton(VisitorLoggerService::class, function ($app) {
            return new VisitorLoggerService();
        });

        $this->app->singleton(VisitorService::class, function ($app) {
            return new VisitorService(
                $app->make(VisitorLoggerService::class)
            );
        });
        $this->app->make(VisitorLoggerService::class)->initialize($this->app->make(VisitorService::class));
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
