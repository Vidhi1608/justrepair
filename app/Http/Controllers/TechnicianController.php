<?php

namespace App\Http\Controllers;

use App\User;
use App\Product;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TechnicianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();
        $products=Product::all();
        // foreach ($users as $value) {
        //     $roles[]= $value->role;
        // }
        //  $roles;
        // return $users->roles;
    
        return view('admin.template.home.layout.assignproducttechnician',compact('users','products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::find($request->user_id);
        $product = Product::find($request->product_id);
        
        $users=User::find($request->user_id)->products;
        $techpro=$users->find($product);
    
    
        
        // return $data;
        if (is_null($techpro)) {
            Alert::success('Product Added Successfully.!');
            $user->products()->attach($product);
        }
        
        
        return redirect('product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
    
        $product=Product::find($request->get('product_id'));
        $user=User::find($request->get('user_id'));
        $user->products()->detach($product);
        Alert::success('Product Deleted.!');
        return redirect('product');
    }
}
