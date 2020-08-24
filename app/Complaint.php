<?php

namespace App;

use App\City;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    protected $fillable = ['name','mobile','address','product','status'];
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
}

