<?php

namespace App\Models;

use App\Trait\HasUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class View extends Model
{
    use HasFactory , HasUser ;

    protected $fillable= ['viewable_id', 'viewable_type', 'user_id'];
}
