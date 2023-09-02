<?php

namespace App\Trait;

use App\Models\Category;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait HasCategory
{
    public function category()
    {
        return $this->belongsTo(Category::class );
    }
}
