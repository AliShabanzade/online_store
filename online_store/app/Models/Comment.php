<?php

namespace App\Models;

use App\Trait\HasUser;
use App\Trait\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory , HasUuid, HasUser;

    protected $fillable = ['uuid', 'comment', 'commentable_id', 'commentable_type', 'user_id', 'parent_id', 'published'];

    public function commentable()
    {
        return $this->morphTo();
    }


}
