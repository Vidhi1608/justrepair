<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::check()) {
            // return Auth::user()->role->name;
            $role = Auth::user()->role->name;

                switch ($role) {
                    case 'Admin':
                       return redirect('admindashboard');
                        break;
                    case 'Technician':
                        return redirect('techdashboard');
                        break;
                    case 'Manager':
                        return redirect('managerdashboard');
                        break;
                }
            // return redirect()->route('chcking');
        }
        // return redirect('/login');
    }
}
