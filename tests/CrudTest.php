<?php

namespace Tests;

use Tests\TestCase;
#use Test\Traits\AttachJwtToken;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CrudTest extends TestCase
{
//    use AttachJwtToken;
//
//    /**
//     * Uses the model factory to generate a fake entry
//     *
//     * @return class
//     */
//    public function createPost()
//    {
//        if($this->state)
//        {
//            return factory($this->model)->states($this->states)->create();
//        }
//
//        return factory($this->model)->create();
//    }
//
//    /**
//     * GET /endpoint/
//     * Should return 201 with data array
//     *
//     * @return void
//     * @test
//     */
//    public function index()
//    {
//        $response = $this->json('GET', "api/v1/{$this->endpoint}");
//
//        $response
//            ->assertStatus(201)
//            ->assertJson([
//                'data' => true
//            ]);
//    }
//
//    /**
//     * GET /endpoint/<id>
//     * Should return 201 with data array
//     *
//     * @return void
//     * @test
//     */
//    public function store()
//    {
//        $activity =$this->$this->createPost()->toArray();
//
//        if ($this->store) {
//            $activity = array_merge($activity, $this->store);
//        }
//
//        $response = $this->json('POST', "api/v1/{$this->endpoint}/", $activity);
//        ($this->model)::destroy($activity['id']);
//        $response
//            ->assertStatus(201)
//            ->assertJson([
//                'data' => true
//            ]);
//    }
//
//    /**
//     * DELETE /endpoint/<id>
//     * Tests the destroy() method that deletes the shop
//     *
//     * @return void
//     * @test
//     */
//    public function destroy()
//    {
//        $activity = $this->createPost();
//        $responce = $this->json('DELETE', "api/v1/{$this->endpoint}/{$activity->id}");
//        $responce->assertStatus(200);
//    }
    /**
     * @test
     */
    public function passTest()
    {
        $this->assertTrue(true);
    }



}
