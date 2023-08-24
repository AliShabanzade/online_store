<?php

namespace App\Repositories\Cart;
use App\models\Cart;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;


class CartRepository extends BaseRepository implements CartRepositoryInterface
{
    public function __construct(Cart $model)
    {
       parent::construct($model);
    }

    public function getModel(): Cart
     {
        return parent::getModel();

     }


}

