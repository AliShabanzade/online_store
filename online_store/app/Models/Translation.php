<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
    protected $fillable= ['translatable_id', 'translatable_type', 'key', 'value', 'locale'];
    use HasFactory;

  public $timestamps = null;

    public function translatable(){
        return $this->morphTo();
    }




}
