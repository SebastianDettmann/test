<?php

namespace App\Libs\Repositories\Article;

use App\Libs\Repositories\BaseRepository;
use App\Article;
use App\Libs\Repositories\Article\Interfaces\ArticleRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use test\Mockery\Stubs\Animal;

class ArticleRepository extends BaseRepository implements ArticleRepositoryInterface
{
    /**
     * constructor
     * @param Article $article
     */
    public function __construct(Article $article)
    {
        $this->model = $article;
    }

    /**
     * @param array $attributes
     * @return mixed
     */
    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }
}