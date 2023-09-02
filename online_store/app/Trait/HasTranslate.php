<?php

namespace App\Trait;

use App\Models\Translation;

trait HasTranslate
{
  public function translations(){
      return $this->morphMany(Translation::class , 'translatable');
  }

    public function translation()
    {
        return $this->morphOne(Translation::class , 'translatable')->where('locale',app()->getLocale());
  }
}
