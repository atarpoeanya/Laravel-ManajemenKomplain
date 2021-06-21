<?php

namespace App\Http\Middleware;

use Closure;
// use Illuminate\Http\Request;

class CheckPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $permission)
    {
    //jika akun yang login sesuai dengan role 
    //maka silahkan akses
    //jika tidak sesuai akan diarahkan ke home

    $permission = explode('|', $permission);

    // foreach ($roles as $role) { 
    //     $user = \Auth::user()->role;
    //     if( $user == $role){
    //         return $next($request);
    //     }
    // }
    if(CheckPermission($permission)) {
        return $next($request);
    }


    return response()->view('check-permission');
    }
}
