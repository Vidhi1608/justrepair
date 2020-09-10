<?php

namespace App;

use App\Inquiry;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    protected $fillable = ['name','dob','email','mobile','address','city','state','zip',];
    //
}
