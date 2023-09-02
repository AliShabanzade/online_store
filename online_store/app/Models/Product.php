<?php

namespace App\Models;

use App\Trait\HasCategory;
use App\Trait\HasComment;
use App\Trait\HasLike;
use App\Trait\HasUser;
use App\Trait\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasUser, HasComment , HasLike , HasUuid;
    protected $fillable= [
        'uuid', 'user_id', 'category_id', 'brand_id', 'inventory', 'published', 'price',
    ];
    use HasCategory ,  HasFactory , HasUser , HasLike , HasUuid;


    public function Items()
    {
       return $this->hasMany(OrderItem::class);
    }

    public function carts(): HasMany
    {
        return $this->hasMany(Cart::class);
    }

}
