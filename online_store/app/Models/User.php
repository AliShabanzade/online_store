<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Trait\HasComment;
use App\Trait\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable , HasUuid , HasComment;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'uuid',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function blogs()
    {
        $this->hasMany(Blog::class , 'user_id' , 'id');
    }




    // agar bekhahim gahi function boot ra dar model estefade konim bayad
    // parent::boot ra dar trait an hazf konim , hamchenin baraye kar kardane har 2 boot bayad dar
    //trait namgozari an ra be soorate  boot+triat anjam dahim = bootHasUuid
//    protected static function boot()
//    {
//        parent::boot();
//        static::creating(function (User $user){
//           $user->uuid = Str::uuid();
//        });
//    }


    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }

}
