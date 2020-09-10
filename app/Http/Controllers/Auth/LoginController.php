<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Role;
use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected function authenticated() {
        
        if (Auth::check()) {
            // return Auth::user()->role->name;
            $role = Auth::user()->role->name;

                switch ($role) {
                    case 'Admin':
                       return redirect('admindashboard');
                        break;
                    case 'Technician':
                        return redirect('admindashboard');
                        break;
                    case 'Manager':
                        return redirect('admindashboard');
                        break;
                }
            // return redirect()->route('chcking');
        }
    }
     protected $redirectTo = RouteServiceProvider::HOME;
   

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
}
