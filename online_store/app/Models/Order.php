<?php

namespace App\Models;

use App\Trait\HasUser;
use App\Trait\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory , HasUser , HasUuid ;

    protected $fillable = [
        'uuid', 'user_id', 'total', 'status',
    ];

    public function Items(){
        return $this->hasMany(OrderItem::class );
    }
}
