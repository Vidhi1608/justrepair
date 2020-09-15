<?php

namespace App\Http\Controllers;

use App\Bill;
use App\City;
use App\Role;
use App\User;
use App\Brand;
use App\Inquiry;
use App\Product;
use App\Complaint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use App\Notifications\NotificationForComplaints;

class LinkController extends Controller
{
    public function addcomplaint()
    {
        // $arr_ip = geoip()->getLocation('103.85.8.126');
        // dd($arr_ip);
        $brands=Brand::all();
        $cities=City::all();
        $products=Product::all();
        return view('admin.template.home.layout.addcomplaint',compact('cities','products','brands'));
    }
    public function newaddcomplaint($id)
    {
        // $arr_ip = geoip()->getLocation('103.85.8.126');
        // dd($arr_ip);
        $complaint=Complaint::find($id);
        // return $complaint;
        
        $products=Product::all();
        return view('admin.template.home.layout.newaddcomplaint',compact('complaint','products'));
    }
    public function report()
    {
        $report=Bill::all();
        // // $array=json_decode($report, true);
        // foreach ($report as $data) {
        //     echo $data->complaint->city->users->first()->where('role_id','=',2)->where('city_id','=',$data->complaint->city->id)->first()->percentage;
        //     echo '<br>';
            // $percentage = User::where('city_id','=',$data->complaint->city->id)->where('role_id','=',2)->get('percentage');
            
        //  }
        // return $percentage;
        // exit();
        $complaints=Complaint::all();
        return view('admin.template.home.layout.report', compact('report','complaints'));
    }

    public function inquiry() 
    {
        $cities=City::all();
        $products=Product::all();
        return view('admin.template.home.layout.businessinquiry', compact('cities','products'));
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
    public function displaybrand($id)
    {   $product=Product::find($id);
        $brands=Brand::all();
        // $brand=$product->brands;
        return view('admin.template.home.layout.displaybrand',compact('product','brands'));
    }
    public function brand()
    {
        return view('admin.template.home.layout.brand');
    }
    public function addbrand()
    {
        
        $products = Product::all();
        return view('admin.template.home.layout.addbrand',compact('products'));
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
    public function assignproducttechnician()
    {
        $users=User::all();
       
        return view('admin.template.home.layout.assignproducttechnician',compact('users'));
    }
    public function footer()
    {
        $cities=City::all();
        $products=Product::all();
        return view('front',compact('cities','products'));
    }
    public function upcoming()
    {
        
        return view('admin.template.home.layout.upcoming');
    }
    public function working()
    {
        $users=User::all();
        $complaints=Complaint::all();
        
        //  $users->notify(new NotificationForComplaints($complaints));
        // $notification =  Notification::notify($users,new NotificationForComplaints($complaints));
       
        if (Auth::user()->role->name  !== 'Technician') {
           
            // return $notifications;
            // exit();
            return view('admin.template.home.layout.working',compact('complaints','users'));
        }
        if (Auth::user()->role->name == 'Technician') {
            foreach(Auth::user()->products as $product) {
                $items[] = $product->name;
            }
        return view('admin.template.home.layout.working',compact('complaints','items',));
        }
    }
    public function completed()
    {
        $complaints=Complaint::all();
        // $bill = total_amount;
        if (Auth::user()->role->name !== 'Technician') {
            
            
        return view('admin.template.home.layout.completed',compact('complaints'));
        }
        
        if (Auth::user()->role->name == 'Technician') {
            foreach(Auth::user()->products as $product) {
                $items[] = $product->name;
            }
            
        return view('admin.template.home.layout.completed',compact('complaints','items'));
        }
        
    }
    public function cancel()
    {
        $complaints=Complaint::all();
        // $bill = total_amount;
        if (Auth::user()->role->name !== 'Technician') {
            
            
        return view('admin.template.home.layout.cancel',compact('complaints'));
        }
        
        // if (Auth::user()->role->name == 'Technician') {
        //     foreach(Auth::user()->products as $product) {
        //         $items[] = $product->name;
        //     }
            
        // return view('admin.template.home.layout.completed',compact('complaints','items'));
        // }
        
    }
    public function bill($id)
    {
        $complaint=Complaint::find($id);
        // return $complaints;
        return view('admin.template.home.layout.bill',compact('complaint'));
    }
    public function makereport($id)
    {
        $complaint=Complaint::find($id);
        
        $expense = $complaint->bill['items_expense'];
        $name = $complaint->bill['items_name'];
        $price = $complaint->bill['items_price'];
        $array = array_combine($name,$price);
        // foreach ($array as $values)  {
        //     foreach ($values as $value)  {
        //    $data[]=$value;
        //     }
        // }
        // return $data;
        // $array= array_combine($complaint->bill['items_name'],$complaint->bill['items_price']);
        
    
        // return $complaint->bill['items_name'];
        // return $complaints;
        return view('admin.template.home.layout.makereport',compact('complaint','expense','name','price','array'));
    }
    public function repeatedbill($id)
    {
        $complaint=Complaint::find($id);
        $array= array_combine($complaint->bill['items_name'],$complaint->bill['items_price']);
        
        return view('admin.template.home.layout.repeatedbill',compact('complaint','array'));
    }
    public function showinquiry()
    {
        $inquiry=Inquiry::all();
    
        return view('admin.template.home.layout.showinquiry',compact('inquiry'));
    }
    public function profile(){
        $users=Auth::user();
        return  view('admin.template.home.layout.profile',compact('users'));
    }
}
