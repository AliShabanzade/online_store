<?php

namespace App\Models;

use App\Trait\HasCategory;
use App\Trait\HasComment;
use App\Trait\HasLike;
use App\Trait\HasUser;
use App\Trait\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasUser, HasComment , HasLike , HasUuid;
    protected $fillable= [
        'uuid', 'user_id', 'category_id', 'brand_id', 'inventory', 'published', 'price',
    ];
    use HasCategory ,  HasFactory , HasUser , HasLike;
}
