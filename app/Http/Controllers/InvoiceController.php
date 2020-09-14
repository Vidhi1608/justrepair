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
        $complaint=Complaint::find($request->complaint_id);
        
        $complaint->update(["status"=> 2]);
        $complaint->save();
        
        return redirect('completed');
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
        // return $request->all();
        if (isset($request->repeatreport)==7) {
            
            $complaints = Complaint::findOrFail($request->complaint_id);
            $complaints->update(["status"=> 7]); // FOR REPEATED REPORTS
            $complaints->save();
            $bill = Bill::find($request->bill_id);
            $expense=$request->price;
            $bill->update(["items_expense" => $request->expense]);
            $bill->save();
            return redirect('completed');
        }elseif(isset($request->newreport)==3) {
                // return "new";
                $complaints = Complaint::findOrFail($request->complaint_id);
                $complaints->update(["status"=> 3]); // FOR FRESH REPORT
                $complaints->save();
                $bill = Bill::find($request->bill_id);
                $expense=$request->price;
                $bill->update(["items_expense" => $request->price]);
                $bill->save();
                return redirect('completed');
        }
        
        
       
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        // return $request->all();
        if (isset($request->rrbill)==5) {
            $complaints = Complaint::findOrFail($request->complaint_id);
            $complaints->update(["status"=> 5]); // FOR REPEATED BILLS
            $complaints->save();
            $bill = Bill::find($request->bill_id);
            $bill->update(["items_price" => $request->price, "items_name" => $request->product]);
            $bill->save();
            return redirect('completed');
        } elseif (isset($request->technician)==1) {
            $bill=Bill::find($request->bill_id);
            $bill->update(["confirmed_by_technician" => 1]); // PAYMENT CONFIRMATION UPDATE BY TECHNICIAN 
            $bill->save();
            return redirect('report');
        } elseif (isset($request->manager)==1) {
            $bill=Bill::find($request->bill_id);
            $bill->update(["confirmed_by_manager" => 1]);   // PAYMENT RCVD FROM TECHNICIAN CONFIRMATION BY MANAGER 
            $bill->save();
            return redirect('report');
        }
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
