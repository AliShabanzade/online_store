<?php

namespace App\Repositories\Order;
use App\models\Order;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;


class OrderRepository extends BaseRepository implements OrderRepositoryInterface
{
    public function __construct(Order $model)
    {
       parent::construct($model);
    }

    public function getModel(): Order
     {
        return parent::getModel();

     }


}

