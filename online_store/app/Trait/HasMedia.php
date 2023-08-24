<?php

namespace App\Trait;

use App\Models\Media;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait HasMedia
{
    public function medias(): MorphMany
    {
        return $this->morphMany(Media::class , 'mediable');
    }
}
