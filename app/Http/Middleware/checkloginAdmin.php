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
        // if ($request->path() == 'admin') {
        //     if (session()->has('ten')) {
        //         return redirect()->route('admin');
        //         // dd(session()->all());

        //     }else{
        //         return redirect()->route('formdangnhap');
        //     }
        // } else {
        //     $user = new khachhangModel();
        //     $check = $user->dangnhap($request->email, $request->mat_khau);
        //     if (!$check) {
        //         return back()->withErrors(['errors' => "email hoặc mật khẩu không đúng"]);
        //     } else {
        //         session(['user_data' => $check]);
        //         return $next($request);
        //     }
        // }
        if (Auth::check() && Auth::user()->role==1) {
           
            return $next($request);
        } else {
            return redirect()->route('formdangnhap');
        }
    }
    public function formdangnhap()
    {
        // $user = new khachhangModel();
        // $check = $user->dangnhap($request->email, $request->mat_khau);
        // dd($check);
    }
    public function checklogin(Request $request)
    {
        dd($request->email);
        return false;
        // $user = new khachhangModel();
        // $check = $user->dangnhap($request->email, $request->mat_khau);
        // dd($check);
    }
}
