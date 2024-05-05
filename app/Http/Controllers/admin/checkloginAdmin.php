<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\user\khachhangModel;
use Illuminate\Http\Request;

class checkloginAdmin extends Controller
{
    //
    public function checklogin(Request $request)
    {

        $user = session()->only(['user_data']);
        foreach ($user as  $value) {
            session(['ten' => $value->ten]);
        }
        // dd(session('ten'));
        return redirect()->route('admin');
        // $user=new khachhangModel();
        // $check=$user->dangnhap($request->email,$request->mat_khau);
        // if (!$check) {
        //     return back()->withErrors(['errors'=>"email hoặc mật khẩu không đúng"]);
        // }else{
        //    session(['ten'=>$check->ten]);
        //    return redirect()->route('admin');
        //     // return $next($request);
        // }

    }
    public function formdangnhap(Request $request)
    {
        if (session()->has('ten')) {
           
            session()->forget('ten');
        }
        return view('admin.login.login');
    }
}
