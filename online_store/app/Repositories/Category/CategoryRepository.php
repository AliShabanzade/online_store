<?php

namespace App\Repositories\Category;
use App\models\Category;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;


class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{
    public function __construct(Category $model)
    {
       parent::construct($model);
    }

    public function getModel(): Category
     {
        return parent::getModel();

     }


}

