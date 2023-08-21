<?php

namespace App\Repositories\User;
use App\models\User;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;


class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    public function __construct(User $model)
    {
       parent::construct($model);
    }

    public function getModel(): User
     {
        return parent::getModel();

     }


}

