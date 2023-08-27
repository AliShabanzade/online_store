<?php

namespace App\Trait;

use App\Models\Category;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait HasCategory
{
    public function category(): HasMany
    {
        return $this->hasMany(Category::class , 'category_id');
    }
}
