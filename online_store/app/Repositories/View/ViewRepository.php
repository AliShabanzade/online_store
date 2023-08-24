<?php

namespace App\Repositories\View;
use App\models\View;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;


class ViewRepository extends BaseRepository implements ViewRepositoryInterface
{
    public function __construct(View $model)
    {
       parent::construct($model);
    }

    public function getModel(): View
     {
        return parent::getModel();

     }


}

