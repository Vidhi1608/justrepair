<?php

namespace App\Http\Controllers;

use App\City;
use App\Product;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AssignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
        $city = City::find($request->city_id);
        $product = Product::find($request->product_id);
        
        $cities=City::find($request->city_id)->products;
        $data=$cities->find($product);
        
        // return $data;
        if (is_null($data)) {
            Alert::success('Product Added Successfully.!');
            $city->products()->attach($product);
        }
        
        
        return redirect('showcities');
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
        $city=City::find($request->get('city_id'));
        $city->products()->detach($product);
        Alert::success('Product Deleted.!');
        return redirect('showcities');
        
            // City::where($request->id)->get()->each(function ($city) {
            //     $city->products()->detach();
            //     $city->delete();
            // });
            // return $city;
    //         $product = City::find($request->city_id);
    //         return $product;
    //         $city->products()->detach($product);
       
       
    //         return redirect('showcities');
     }
}
