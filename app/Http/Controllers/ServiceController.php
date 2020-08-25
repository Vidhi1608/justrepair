<?php

namespace App\Http\Controllers;

use App\City;
use App\Product;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function view()
    {
        $cities = City::all();
        
        $products=Product::all();
        return view('services', compact('cities','products'));
    }
}
