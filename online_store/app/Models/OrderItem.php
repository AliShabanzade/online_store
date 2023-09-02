<?php

namespace App\Models;

use App\Trait\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory , HasUuid ;

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function product()
    {
       return $this->belongsTo(Product::class);
    }


}
