<?php

namespace App\Repositories\Blog;
use App\models\Blog;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;


class BlogRepository extends BaseRepository implements BlogRepositoryInterface
{
    public function __construct(Blog $model)
    {
       parent::construct($model);
    }

    public function getModel(): Blog
     {
        return parent::getModel();

     }


}

