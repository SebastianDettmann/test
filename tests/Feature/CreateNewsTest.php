<?php

namespace Tests\Feature;

use Illuminate\Http\UploadedFile;
use Tests\TestCase;
use App\News;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

/**
 * Class CreateNewsTest
 * @package Tests\Feature
 */
class CreateNewsTest extends TestCase
{
    /**
     * @test
     */
    public function user_can_create_news()
    {
        $data = [
            'title' => 'toller Title',
            'body' => 'super Inhalt'
        ];

        $this->assertEquals(0, News::count());
        $this->actingAs($this->user)
            ->postJson(route('news.store', $data))
            ->assertStatus(201);
        $news = News::first();
        $this->assertEquals($data['title'], $news->title);
        $this->assertEquals($data['body'], $news->body);
    }

    /**
     * @test
     */
    public function unautenticated_user_cant_create_news()
    {
        $this->postJson(route('news.store'))
            ->assertStatus(401);
    }

    /**
     * @test
     */
    public function autenticated_user_can_create_news_with_immages()
    {
        \Storage::fake('public');
        $file = UploadedFile::fake()->image('image.jpg', 200, 150);
        $data = [
            'title' => 'toller Title',
            'body' => 'super Inhalt',
            'image' => $file
        ];

        $this->actingAs($this->user)
            ->postJson(route('news.store', $data));
           # ->assertStatus(201);

        $news = News::latest();
        $imagePath = 'news/' . $file->hashName();
        \Storage::disk('public')->assertExists($imagePath);
        $this->assertEquals($data['title'], $news->title);
        $this->assertEquals($data['body'], $news->body);
        $this->assertEquals($imagePath, $news->image_path);

        \Storage::disk('public')->assertExists($imagePath);
    }
    }
