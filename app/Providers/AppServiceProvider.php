<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Nyxon\Provider\NyxonServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->register(NyxonServiceProvider::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
