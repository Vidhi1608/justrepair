<?php

namespace App\Http\Controllers;

use App\Complaint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ComplaintsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $product=Complaint::findorfail(1)->product->name;
        // return $product;
        // $complaints=Complaint::findorfail(1);

        // return $complaints->city->name;
        // foreach ($complaint as $data) {
        //     if($data->city_id == 2){
        //         return view('admin.template.home.layout.showcomplaint',compact('complaint'));
        //     }
        //     elseif($data->city_id == 14){
        //         return 'hello i am baroda manager';
        //     }
        //     elseif($data->city_id == 16){
        //         return 'hello i am udaipur manager';
        //     }
        //     else{
        //         return 'hello i am  manage';
        //     }

            
        // }

        
        $complaints=Complaint::paginate(5);
        
        return view('admin.template.home.layout.showcomplaint',compact('complaints'));
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
      
        $complaint= new Complaint;
        $complaint->name=ucfirst($request->name);
        $complaint->mobile=$request->mobile;
        $complaint->address=$request->address;
        $complaint->city_id=$request->city_id;
        $complaint->product_id=$request->product_id;
        // $complaint->status=$request->status;
        $complaint->comment=$request->comment;
        $complaint->save();
        return redirect('complaints');
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
    public function destroy($id)
    {
        //
    }
}

