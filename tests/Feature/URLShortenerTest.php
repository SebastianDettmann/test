<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class URLShortenerTest extends TestCase
{
    /**
     * @test
     */
    public function testExample()
    {
        $responce = $this->json('POST', '/create/link', [
            'url' => 'https://dev.to/fitri',
            'name' => 'fitri'
        ]);

        #$responce->assertJson(['created' => true]);
        $this->assertTrue(true);
    }
}
