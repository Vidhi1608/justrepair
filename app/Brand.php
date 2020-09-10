<?php

namespace App;

use App\Product;
use App\Complaint;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = ['name','product_id',];
    public function products()
    {
        return $this->hasMany('App\Product');
    }
    public function complaint()
    {
        return $this->hasMany('App\Complaint');
    }
}
