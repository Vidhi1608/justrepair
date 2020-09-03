<?php

namespace App\Http\Controllers;

use App\User;
use App\Complaint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use App\Notifications\NotificationForComplaints;

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

        // $auth_city_id= Auth::user()->city_id;
        // return Auth::user()->role->name;
        // $users = User::where()->role->name->get();
        // exit();
        // return $auth_city_id;
        
        
        // }
        $complaints=Complaint::all();
        if (Auth::user()->role->name == 'Technician') {
            foreach(Auth::user()->products as $product) {
                $items[] = $product->name;
            }
            return view('admin.template.home.layout.upcoming',compact('complaints','items'));
        }
         
        
    
        return view('admin.template.home.layout.upcoming',compact('complaints'));
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
        $complaint->area=$request->area;
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
    public function show(Request $request)
    {
        
        $complaints = Complaint::findorFail($request->id);
        $complaints = $request->total_amount;
         return "$complaints";
        return redirect('completed');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        
        $status = $request->complaint_status;
        $complaints = Complaint::findOrFail($request->id);
       
        // $users = User::where('role_id','1')->get();
        $notifications = Notification::send(User::all(), new NotificationForComplaints($complaints));
        
        // Auth::user()->notify(User::all(),new NotificationForComplaints($complaints));
        $complaints->update(["user_id"=> 0 ,"status"=> $status]);
        $complaints->save();
        return redirect('working');
        // Notification::send($user, new MyFirstNotification());
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
        $user = $request->user_id;
        $complaints = Complaint::findOrFail($request->id);
        $complaints->update(["user_id"=> $user ,"status"=> 1]);
        $complaints->save();
        
        return redirect('working');

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

