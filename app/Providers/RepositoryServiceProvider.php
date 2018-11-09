<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Libs\Repositories\Article\ArticleRepository;
use App\Libs\Repositories\Article\Interfaces\ArticleRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     *
     * Bind the Interface to an implementation repository class
     */
    public function register()
    {
        $this->app->bind(
            ArticleRepositoryInterface::class,
            ArticleRepository::class
        );
    }
}
