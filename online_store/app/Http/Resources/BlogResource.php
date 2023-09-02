<?php

namespace App\Http\Resources;

use App\Services\Translation\TranslationService;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BlogResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
//        dd($this->resource);
        return [
            'id'=> $this->id,
            'uuid' => $this->uuid,
//            'title'=> $this->translation()->where('key' , 'title')->first()->value?? '',
            'title'=> TranslationService::get($this->resource , 'title'),
            'summary'=> '',
            'body' => '',

            'published' => $this->published,
            'created_at'=>$this->created_at,
            'updated_at'=>$this->updated_at,
//            'category' =>$this->category,
//            'user'=> $this->user,
            'category'=> CategoryResource::make($this->category),
            'user'=> UserResource::make($this->user),

        ];
    }
}
