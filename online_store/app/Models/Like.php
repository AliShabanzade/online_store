<?php

namespace App\Models;

use App\Trait\HasUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    //user function(relation with user) moved to trait
    use HasUser ;
    use HasFactory;

    protected $fillable= ['user_id', 'likeable_id', 'likeable_type'];
}
