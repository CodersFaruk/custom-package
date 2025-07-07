<?php

namespace Nyxon\Provider;

use Illuminate\Support\ServiceProvider;

class NyxonServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/../Routes/web.php');
        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
        // Load views with a namespace
        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'nyxon');
        // Optional: Publish assets or configs (currently commented)
        $this->vendorPublish();
    }

    public function register(): void
    {
        // Bind classes or services into the container here if needed
    }

    protected function vendorPublish(): void
    {
        // Example for asset publishing (uncomment and customize if needed)
        /*
        $this->publishes([
            __DIR__ . '/../resources/assets/js' => public_path('vendor/learning/js'),
        ], 'learning-assets');
        */
    }
}
