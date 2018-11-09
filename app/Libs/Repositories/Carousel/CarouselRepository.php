<?php
/**
 * Created by PhpStorm.
 * User: dettmann
 * Date: 08.11.2018
 * Time: 17:25
 */

namespace App\Libs\Repositories\Carousel;

use App\Carousel;
#
use App\Libs\Repositories\BaseRepository;
use Illuminate\Database\QueryException;

class CarouselRepository extends BaseRepository
{
    /**
     * constructor
     * @param Carousel $carousel
     */
    public function __construct(Carousel $carousel)
    {
        $this->model = $carousel;
    }
}