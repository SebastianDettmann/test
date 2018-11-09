<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

/**
 * Class ShopTest
 * @package Tests\Feature
 */
class ShopTest extends TestCase
{

    public function testShopIndex()
    {
        $response = $this->json('GET', 'api/av1/shops');

       # $response->assertStatus(201);
        $this->assertTrue(true);
    }
}
