<?php

namespace App\Repositories\Brand;
use App\models\Brand;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;


class BrandRepository extends BaseRepository implements BrandRepositoryInterface
{
    public function __construct(Brand $model)
    {
       parent::construct($model);
    }

    public function getModel(): Brand
     {
        return parent::getModel();

     }


}

