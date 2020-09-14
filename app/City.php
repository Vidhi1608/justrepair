<?php

namespace App;

use App\Area;
use App\User;
use App\Product;
use App\Complaint;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['name','mobile'];

    // protected $table = 'cities';
    public function products()
    {
        return $this->belongsToMany('App\Product')->withTimestamps();
    }
    public function areas()
    {
        return $this->hasMany('App\Area');
    }
    public function users()
    {
        return $this->hasMany('App\User');
    }
    public function area()
    {
        return $this->hasMany('App\Area');
    }
    public function complaint()
    {
        return $this->hasMany('App\Complaint');
    }
}
