<?php

namespace App\Libs\Repositories\Article\Interfaces;

use App\Libs\Repositories\BaseRepositoryInterface;

interface ArticleRepositoryInterface extends BaseRepositoryInterface
{
    public function create(array $attribute);
}