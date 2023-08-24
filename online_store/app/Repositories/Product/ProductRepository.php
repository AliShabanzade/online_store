<?php

namespace App\Repositories\Product;

use App\Models\Product;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{
    public function __construct(Product $model)
    {
        parent::__construct($model);
    }


    public function query( array $payload = []): Builder
    {
         return parent::query()
             ->when(!empty($payload['user_id']) , function ($q) use ($payload){
                     $q->where('user_id' , $payload['user_id']);

             })
             ->when(!empty($payload['search']) , function ($q) use ($payload){
                 $q->where('title' , 'like' , '%'.$payload['search'].'%');
             });
    }

    public function toggle(Product $product): Product
    {
        $product->status = !$product->status;
        $product->save();
        return $product;
    }

}
