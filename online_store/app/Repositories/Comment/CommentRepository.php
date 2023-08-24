<?php

namespace App\Repositories\Comment;
use App\models\Comment;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;


class CommentRepository extends BaseRepository implements CommentRepositoryInterface
{
    public function __construct(Comment $model)
    {
       parent::construct($model);
    }

    public function getModel(): Comment
     {
        return parent::getModel();

     }


}

