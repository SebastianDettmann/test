<?php

namespace Tests;

use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Faker\Factory as Faker;

/**
 * Class TestCase
 * @package Tests
 * @runTestsInSeparateProcesses
 * @preserveGlobalState disabled
 */

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication, DatabaseMigrations, DatabaseTransactions;

    protected $faker;
    protected $user;

    public function setUp()
    {
        parent::setUp();
       # $this->withoutMiddleware();
       # $this->withoutExceptionHandling();
        $this->faker = Faker::create();
        $this->artisan('db:seed');
        $this->user = factory(User::class)->create();
     }

    public function tearDown()
    {
        $this->artisan('migrate:reset');
        parent::tearDown();
    }
}
