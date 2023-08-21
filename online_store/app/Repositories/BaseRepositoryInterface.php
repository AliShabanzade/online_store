<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

interface BaseRepositoryInterface
{
    public function store(array $payload): Model ;

    public function update($eloquent , array $payload): Model;


    public function delete($eloquent): bool;

    public function find($id): Model;


    public function findByUuid($uuid): Model;




}
