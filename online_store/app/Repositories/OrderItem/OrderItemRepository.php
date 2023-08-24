<?php

namespace App\Repositories\OrderItem;
use App\models\OrderItem;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;


class OrderItemRepository extends BaseRepository implements OrderItemRepositoryInterface
{
    public function __construct(OrderItem $model)
    {
       parent::construct($model);
    }

    public function getModel(): OrderItem
     {
        return parent::getModel();

     }


}

