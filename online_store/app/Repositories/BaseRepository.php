<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class BaseRepository implements BaseRepositoryInterface
{

    public function store(array $payload): Model
    {
        // TODO: Implement store() method.
    }

    public function update($eloquent, array $payload): Model
    {
        // TODO: Implement update() method.
    }

    public function delete($eloquent): bool
    {
        // TODO: Implement delete() method.
    }

    public function find($id): Model
    {
        // TODO: Implement find() method.
    }

    public function findByUuid($uuid): Model
    {
        // TODO: Implement findByUuid() method.
    }
}
