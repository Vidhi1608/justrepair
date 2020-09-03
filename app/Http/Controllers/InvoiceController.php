<?php

namespace App\Http\Controllers;

use App\Bill;
use App\Complaint;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $invoice = new Bill;
        $invoice->complaint_id=$request->complaint_id;
        $invoice->payment_method=$request->payment;
        $invoice->items_name=$request->product;
        $invoice->items_price=$request->price;
        $invoice->save();
        $complaint=$invoice->complaint_id=$request->complaint_id;
        return redirect('invoice/'.$complaint);
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
    public function edit(Request $request)
    {
        $bill = Bill::find($request->bill_id);
        
        $expense=$request->price;
        
        
        $bill->update(["items_expense" => $request->price]);
        $bill->save();
        return redirect('completed');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $complaint)
    {
        // return $complaint;
        $complaints = Complaint::findOrFail($complaint);
        $complaints->update(["status"=> 2]);
        $complaints->save();
        return redirect('completed');
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
