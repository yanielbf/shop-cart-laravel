<?php

namespace Otiumtek\ShopCartLaravel\Facades;

use Illuminate\Support\Facades\Facade;

class ShopCartLaravel extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'shop-cart-laravel';
    }
}
