<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Auth;
class CustomAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check())
        return $next($request);
        return redirect('/login');
        // if(Auth::check()){
        //      return $next($request);
        // }else{
        //     Auth::logout();
        //     return redirect()->route('login');
        // }
        // $path= $request->path();
        
        // if(($path=="login") && (Session::get('user'))){
        //     return redirect('/');
        // }
        // elseif($path!='login' && Session::get('user')){
        //     return "user not login";
        // }
        
    }
}
