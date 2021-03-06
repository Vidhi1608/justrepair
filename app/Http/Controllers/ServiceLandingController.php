<?php

namespace App\Http\Controllers;

use App\Area;
use App\City;
use App\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ServiceLandingController extends Controller
{
    public function view($request)
    {
        $product = Str::before($request, '-repairing-service');
        $city = Str::after($request, 'repairing-service-in-');
        // return $city;
        $areas = City::whereName($city)->first()->areas->all();
        $mobile=City::where('name','=',$city)->get()->first();
        // return $cities;
        $products=Product::all();
        $cities=City::all();
        return view('landing',compact('mobile','product', 'city', 'areas','cities','products'));
    }
}
