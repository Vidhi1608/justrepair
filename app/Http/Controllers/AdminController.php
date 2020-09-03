<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $users=User::paginate(5);
            
            foreach ($users as $value) {
                $roles[]= $value->role;
            }
             $roles;
            return view('admin.template.home.layout.showadmin',compact('users','roles'));
        // if (empty($request->all())) {
         
        //     $users=User::paginate(5);
            
        //     foreach ($users as $value) {
        //         $roles[]= $value->role;
        //     }
        //      $roles;
        //     return view('admin.template.home.layout.showadmin',compact('users','roles'));
        // } else {
        //     $users=DB::table('users')->where('name','LIKE','%'.$request->search.'%')->orWhere('mobile','LIKE','%'.$request->search.'%')->paginate(2);
        //     foreach ($users as $value) {
        //         $roles[]= $value->role;
        //     }
        //      $roles;
        //     return view('admin.template.home.layout.showadmin',compact('users','roles'));
        // }
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
        $admin= new User;
        $admin->role_id = $request->role_id;
        $admin->name = ucfirst($request->fname . " " . $request->lname);
        $admin->mobile=$request->mobile;
        $admin->email=$request->email;
        $admin->password= Hash::make($request->password);
        
        
        if ($request->role_id!== 'Admin') {
            $admin->city_id=$request->city_id;
        }
            
        $admin->save();
        if ($request->role_id== 'Technician') {
        $users =User::find($admin->id);
        $products=Product::find($request->product_id);
        
        foreach ($products as $product) {
            
          $users->products()->attach($product);  
        }
    }
    
        return redirect('admin');
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
