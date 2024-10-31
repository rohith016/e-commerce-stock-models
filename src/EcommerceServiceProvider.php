<?php

namespace EcommercePackage;

use Illuminate\Support\ServiceProvider;

class EcommerceServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Publish migrations
        // php artisan vendor:publish --tag=ecommerce-migrations
        $this->publishes([
            __DIR__ . '/Migrations' => database_path('migrations'),
        ], 'ecommerce-migrations');

        // Publish models
        // php artisan vendor:publish --tag=ecommerce-models
        $this->publishes([
            __DIR__ . '/Models' => app_path('Models'),
        ], 'ecommerce-models');

        
        // Publish seeders
        // php artisan vendor:publish --tag=ecommerce-seeders
        $this->publishes([
            __DIR__ . '/Seeders' => database_path('seeders'),
        ], 'ecommerce-seeders');

        // Publish factories
        // php artisan vendor:publish --tag=ecommerce-factories
        $this->publishes([
            __DIR__ . '/Factories' => database_path('factories'),
        ], 'ecommerce-factories');


        // publish all things like run this command 
        // php artisan vendor:publish

    }
}
