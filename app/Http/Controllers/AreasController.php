<?php

namespace App\Http\Controllers;

use App\Area;
use App\City;
use Illuminate\Http\Request;

class AreasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities=City::all();
        
        return view('admin.template.home.layout.area',compact('cities'));
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
    public function store(Request $request){
        
     $area= Area::firstOrNew(['name'=>$request->name]);
        
     $area->city_id=($request->city_id);
     $area->name=ucfirst($request->name);

        $area->save();
        return redirect('areas');
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
        $area=Area::find($id);
        
        return view('admin.template.home.layout.editarea',compact('area','id'));
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
        
        $area=Area::find($id);
        $city=Area::find($id)->city->id;
        
        
        $area->name=$request->name;
        $area->save();
        return redirect('displayareas/'.$city);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        // 
        $area=Area::find($request->get('area_id'))->delete();
        return redirect('/areas');
    }
}
