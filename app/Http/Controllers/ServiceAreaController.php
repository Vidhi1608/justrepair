<?php

namespace App\Http\Controllers;

use App\Area;
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
            $companies = Product::whereName(str_replace('-', ' ', $product))->first()->companies;
            $from = Area::whereName($area)->first()->city->name;
            return view('area', compact('product', 'area', 'companies','from'));
        }
        if (Str::contains($area, 'service-center')) {
            $company = Str::before($area, '-service-center');
            $product = Str::before($request, '-repairing-service');
            $area = Str::after($area, 'service-center-');
            return view('company', compact('company', 'product', 'area'));
        }
    }
}
