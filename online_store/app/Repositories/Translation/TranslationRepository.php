<?php

namespace App\Repositories\Translation;
use App\models\Translation;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;


class TranslationRepository extends BaseRepository implements TranslationRepositoryInterface
{
    public function __construct(Translation $model)
    {
       parent::construct($model);
    }

    public function getModel(): Translation
     {
        return parent::getModel();

     }


}

