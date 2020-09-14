<?php

namespace App;

use App\City;
use App\Role;
use App\Detail;
use App\Product;
use App\Complaint;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role_id','name','file', 'mobile','email', 'password','city_id','product_id','status',
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
    public function role()
    {
        return $this->belongsTo('App\Role');
    }
    public function detail()
    {
        return $this->hasOne('App\Detail');
    }
    public function products()
    {
        return $this->belongsToMany('App\Product')->withTimestamps();
    }
    public function city()
    {
        return $this->belongsTo('App\City');
    }
    public function complaint()
    {
        return $this->hasOne('App\Complaint');
    }

}
