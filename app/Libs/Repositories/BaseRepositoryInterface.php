<?php
/**
 * Created by PhpStorm.
 * User: dettmann
 * Date: 08.11.2018
 * Time: 15:49
 */

namespace App\Libs\Repositories;


interface BaseRepositoryInterface
{
    #public function create(array $attributes);
    #public function update(array $attributes, int $id);
    #public function all($columns = array('*'), string $orderBy = 'id', string $sortBy = 'desc');
    #public function find(int $id);
    #public function findOneOrFail(int $id);
    #public function findBy(array $data);
    #public function findOneBy(array $data);
    #public function findOneByOrFail(array $data);
    #public function paginateArrayResults(array $data, int $perPage = 50);
    #public function delete(int $id);
}