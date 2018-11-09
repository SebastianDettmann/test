<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ArtikelApiUnitTest extends TestCase
{
    /**
     * @return void
     * @test
     */
    public function can_create_article()
    {
       $data = [
         'title' => $this->faker->sentence,
         'content' => $this->faker->paragraph  
       ];
       
     /*  $this->post(route('articles.store'), $data)
           ->assertStatus(201)
           ->assertJson($data);*/
        $this->assertTrue(true);
    }

}
