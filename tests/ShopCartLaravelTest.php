<?php

namespace Otiumtek\ShopCartLaravel\Tests;

use Otiumtek\ShopCartLaravel\Facades\ShopCartLaravel;
use Otiumtek\ShopCartLaravel\ServiceProvider;
use Orchestra\Testbench\TestCase;

class ShopCartLaravelTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [ServiceProvider::class];
    }

    protected function getPackageAliases($app)
    {
        return [
            'shop-cart-laravel' => ShopCartLaravel::class,
        ];
    }

    public function testExample()
    {
        $this->assertEquals(1, 1);
    }
}
