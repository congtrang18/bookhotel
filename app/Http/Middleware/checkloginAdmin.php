<?php

namespace App\Http\Middleware;

// use App\Http\Requests\khachhangUser;
use App\Models\user\khachhangModel;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Symfony\Component\HttpFoundation\Response;

class checkloginAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       
        if (Auth::check() && Auth::user()->role==1) {
           
            return $next($request);
        } else {
            return redirect()->route('formdangnhap');
        }
    }
    
}
