<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Traits\GenericClassWithMedia;
use Illuminate\Support\Facades\DB;
use App\User;
// DB

class User extends Authenticatable
{
    use Notifiable;
    protected $connection = 'users';
    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'name2',
        'surname',
        'surname2',
        'email',
        'password',
        'avatar',
        'number_cell',
        'rol',
        'profession',
        'status',
        'country',
        'state',
        'city',
        'birth_date',
        'amount',
        'restablecer_pass',
        'general_presentation',
        'gender',
        'count_like',
        'banner',
        'count_dislike',
        'code_country'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function ikigais ()
    {
        return $this->hasMany(Ikigai::class);
    }
    public function comments ()
    {
        return $this->hasMany(Comment::class);
    }
    public function  products()
    {
        return $this->hasMany(Product::class);
    }
    public function userServices ()
    {
        return $this->hasMany(UserProducService::class);
    }

     //SCOPES
    public function scopeUsers($query)
    {
        return $query->where('rol','!=','admin');
    }

    //Gueters
    public function getFullNameAttribute()
    {
        return $this->name.' '.$this->surname;
    }


}
