<?php

namespace App\Http\Controllers;

use App\Area;
use App\City;
use App\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ServiceAreaController extends Controller
{
    public function view($request, $area)
    {
        if (Str::contains($area, 'repair-service')) {
            $product = Str::before($request, '-repairing-service');
            $area = Str::after($area, 'repair-service-');
            $companies = Product::whereName(str_replace('-', ' ', $product))->first()->brands;
           
            $from = Area::whereName($area)->first()->city->name;
            $cities=City::all();
            $products=Product::all();
            
            return view('area', compact('product', 'area', 'companies','from','cities','products'));
        }
        if (Str::contains($area, 'service-center')) {
            $company = Str::before($area, '-service-center');
            $product = Str::before($request, '-repairing-service');
            $area = Str::after($area, 'service-center-');
            $cities=City::all();
            $companies = Product::whereName(str_replace('-', ' ', $product))->first()->brands;
            $products=Product::all();
            return view('company', compact('company', 'product', 'area','cities','products','companies'));
        }
    }
}
