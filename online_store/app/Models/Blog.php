<?php

namespace App\Models;

use App\Trait\HasCategory;
use App\Trait\HasComment;
use App\Trait\HasMedia;
use App\Trait\HasTranslate;
use App\Trait\HasUser;
use App\Trait\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory , HasComment;
    use SoftDeletes , HasUser;
    use HasMedia , HasCategory , HasUuid , HasTranslate;

    protected $fillable= ['uuid', 'published', 'user_id', 'category_id'];

   //move to user Trait
//    public function user(): BelongsTo
//    {
//      return $this->belongsTo(User::class);
//    }


// move to category trait
//    public function category(): BelongsTo
//    {
//      return $this->belongsTo(Category::class);
//    }



}
