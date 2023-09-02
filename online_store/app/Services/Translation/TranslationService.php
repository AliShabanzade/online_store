<?php

namespace App\Services\Translation;

class TranslationService
{
    //use this function to get translation in model Resource
    public static function get($model, $key):String {
       return $model->translation()->where('key' , $key)->first()->value ?? '';
    }

}
