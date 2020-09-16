<?php

namespace App\Http\Controllers;

use App\City;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities=City::all();
        $products=Product::all();
        
        return view('admin.template.home.layout.showassignproduct',compact('cities','products'));
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
        $city= City::firstOrNew(['name' => $request->name]);
        $city->name=ucfirst($request->name);
        $city->email=$request->email;
        $city->address=$request->address;
        $city->mobile=$request->mobile;
        $city->save();
        return redirect('cities');
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
        $city=City::find($id);
        
        return view('admin.template.home.layout.editcity',compact('city','id'));
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
        $this->validate($request,[
            'name' => 'required',
        ]);
        $city=City::find($id);
        $city->name=$request->name;
        $city->email=$request->email;
        $city->address=$request->address;
        $city->mobile=$request->mobile;
        $city->save();
        return redirect('cities'); 
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
        $city=City::find($request->get('city_id'));
       if(isset($request->product_id)) {

            foreach ($product as $products) {
            $city->products()->detach($product);
            }
        } 
        $city->delete();
        return redirect('/cities');
    }
}
