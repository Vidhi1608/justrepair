<?php

namespace App\Http\Controllers;

use App\Area;
use App\City;
use App\Role;
use App\User;
use App\Product;
use App\Complaint;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function addcomplaint()
    {
        $cities=City::all();
        $products=Product::all();
        return view('admin.template.home.layout.addcomplaint',compact('cities','products'));
    }

    public function showcomplaint()
    {
        return view('admin.template.home.layout.showcomplaint');
    }
    public function city()
    {
        
        $cities=City::all();
        return view('admin.template.home.layout.city',compact('cities'));
    }
    public function assignproduct()
    {
        $cities=City::all();
        $products=Product::all();
       
        return view('admin.template.home.layout.assignproduct',compact('cities','products'));
    }
    public function showassignproduct()
    {
        $products=Product::all();
        
        return view('admin.template.home.layout.showassignproduct',compact('products'));
    }
    public function addcity()
    {
        
        return view('admin.template.home.layout.addcity');
    }
    public function product()
    {
        return view('admin.template.home.layout.product');
    }
    public function addproduct()
    {
        $product=Product::all();
        return view('admin.template.home.layout.addproduct',compact('product'));
    }
    
    public function area()
    {
        return view('admin.template.home.layout.area');
    }
    public function addarea()
    {
        $cities=City::all();
        return view('admin.template.home.layout.addarea',compact('cities'));
    }
    public function displayarea($id)
    {   $city=City::find($id);
        $area=$city->areas;
        return view('admin.template.home.layout.displayarea',compact('area','city'));
    }
    public function brand()
    {
        return view('admin.template.home.layout.brand');
    }
    public function addbrand()
    {
        
        return view('admin.template.home.layout.addbrand');
    }
    public function manager()
    {
        return view('admin.template.home.layout.manageradmin');
    }
    public function technician()
    {
        return view('admin.template.home.layout.technicianadmin');
    }
    public function addadmin()
    {
        
        return view('admin.template.home.layout.addadmin');
    }
    public function showadmin()
    {
       
        return view('admin.template.home.layout.showadmin',compact('admin'));
    }
    public function addmanager()
    {
        $cities=City::all();
        return view('admin.template.home.layout.addmanager',compact('cities'));
    }
    public function showmanager()
    {
        
        return view('admin.template.home.layout.showmanager');
    }
    public function addtechnician()
    {
        $cities=City::all();
        $products=Product::all();
        return view('admin.template.home.layout.addtechnician',compact('cities','products'));
    }
    public function showtechnician()
    {
        
        return view('admin.template.home.layout.showtechnician');
    }
    public function footer()
    {
        $cities=City::all();
        $products=Product::all();
        return view('front',compact('cities','products'));
    }
}
