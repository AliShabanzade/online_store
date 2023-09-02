<?php

namespace App\Models;

use App\Trait\HasUser;
use App\Trait\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cart extends Model
{
    use HasFactory , HasUser , HasUuid ;

    protected $fillable = ['uuid', 'user_id', 'product_id', 'qty'];
    public function product(): BelongsTo
    {
        //each cart related to one product .
        return $this->belongsTo(Product::class);
    }



}
