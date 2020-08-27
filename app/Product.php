<?php

namespace App;

use App\City;
use App\User;
use App\Brand;
use App\Complaint;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name'];
    //
public function cities()
{
    return $this->hasMany('App\City');
}
// public function companies()
// {
//     return $this->hasMany('App\Company');
// }
public function users()
 {
     return $this->hasMany('App\User');
 }
 public function complaint()
    {
        return $this->hasMany('App\Complaint');
    }
    public function brands()
    {
        return $this->hasMany('App\Brand');
    }
}
