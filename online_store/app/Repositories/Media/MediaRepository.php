<?php

namespace App\Repositories\Media;
use App\models\Media;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;


class MediaRepository extends BaseRepository implements MediaRepositoryInterface
{
    public function __construct(Media $model)
    {
       parent::construct($model);
    }

    public function getModel(): Media
     {
        return parent::getModel();

     }


}

