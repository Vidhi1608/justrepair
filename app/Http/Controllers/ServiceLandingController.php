<?php

namespace App\Http\Controllers;

use App\Area;
use App\City;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ServiceLandingController extends Controller
{
    public function view($request)
    {
        $product = Str::before($request, '-repairing-service');
        $city = Str::after($request, 'repairing-service-in-');
        $areas = City::whereName($city)->first()->areas->all();
        return view('landing',compact('product', 'city', 'areas'));
    }
}
