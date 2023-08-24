<?php

namespace App\Repositories;

use App\Repositories\Product\ProductRepository;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class BaseRepository implements BaseRepositoryInterface
{
    public function __construct(public Model $model )
    {
    }

    public function query(array $payload = []): Builder
    {
        return $this->model->query();
    }

    public function all(array $payload = []): Collection
    {
//        $rep=new BaseRepository();
//        $rep->query();
//        $rep=new ProductRepository();
//        $rep->query();
        // in query()  , function query bala ast ke 1 builder bar migardand tashabohe esmi
       return $this->query($payload)->get();
    }
    public function paginate(int $limit = 15, array $payload = [])
    {
        return $this->query($payload)->paginate($limit);
    }

    public function get(array $payload = [])
    {
       return $this->query($payload)->get();
    }

    public function store(array $payload): Model
    {
       return $this->model->create($payload);
    }

    public function update($eloquent, array $payload): Model
    {
       $eloquent->update($payload);
       return $eloquent;
    }

    public function delete($eloquent): bool
    {
        return $eloquent->delete();
    }

    public function find($id, array $payload = ['*']): Model
    {
        return $this->model->select($payload)->find($id);
    }

    public function findByUuid($uuid, array $payload = ['*']): Model
    {
        return $this->model->select($payload)->where('uuid',$uuid)->first();
    }





}
