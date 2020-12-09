<?php

namespace Otiumtek\ShopCartLaravel;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    const CONFIG_PATH = __DIR__ . '/../config/shop-cart-laravel.php';

    public function boot()
    {
        $this->publishes([
            self::CONFIG_PATH => config_path('shop-cart-laravel.php'),
        ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            self::CONFIG_PATH,
            'shop-cart-laravel'
        );

        $this->app->bind('shop-cart-laravel', function () {
            return new ShopCartLaravel();
        });
    }
}
