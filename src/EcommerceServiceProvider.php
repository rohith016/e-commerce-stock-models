<?php

namespace EcommercePackage;

use Illuminate\Support\ServiceProvider;

class EcommerceServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Publish migrations
        $this->publishes([
            __DIR__ . '/Migrations' => database_path('migrations'),
        ], 'ecommerce-migrations');

        // Publish models
        $this->publishes([
            __DIR__ . '/Models' => app_path('Models'),
        ], 'ecommerce-models');

        // Publish seeders
        $this->publishes([
            __DIR__ . '/Seeders' => database_path('seeders'),
        ], 'ecommerce-seeders');

        // Publish factories
        $this->publishes([
            __DIR__ . '/Factories' => database_path('factories'),
        ], 'ecommerce-factories');
    }
}
