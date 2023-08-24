<?php

namespace App\Models;

use App\Trait\HasComment;
use App\Trait\HasMedia;
use App\Trait\HasUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory , HasComment;
    use SoftDeletes , HasUser;
    use HasMedia;

    protected $fillable= ['uuid', 'published', 'user_id', 'category_id'];

    public function user(): BelongsTo
    {
      return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
      return $this->belongsTo(Category::class);
    }


}
