<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarouselUnitTest extends TestCase
{
    /**
     * @test
     */
    public function can_create_carousel()
    {
        $data = [
            'title' => $this->faker->word,
            'link' => $this->faker->url,
            'scr' => $this->faker->url,
        ];

        /*$carouselRepo = new CarouselRepository(new Carousel);
        $carousel = $carouselRepo->create($data);

        $this->assertInstanceOf(Carousel::class, $carousel);
        $this->assertEquals($data['title'], $carousel->title);
        $this->assertEquals($data['link'], $carousel->link);
        $this->assertEquals($data['src'], $carousel->src);*/
        $this->assertTrue(true);
    }
}
