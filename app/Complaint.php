<?php

namespace App;

use App\Bill;
use App\City;
use App\User;
use App\Brand;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    protected $fillable = ['name','user_id','mobile','address','city_id','brand_id','product_id','product','status'];
    protected $table = 'complaints';

    public function city()
    {
        return $this->belongsTo('App\City');
    }
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
    public function products()
    {
        return $this->belongsToMany('App\Product');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function bill()
    {
        return $this->hasOne('App\Bill');
    }
    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }
    // public function bill()
    // {
    //     return $this->hasOne('App\Bill', 'foreign_key');
    // }
}

