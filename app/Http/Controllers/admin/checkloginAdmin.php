<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\user\khachhangModel;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class checkloginAdmin extends Controller
{
  
    public function checklogin(Request $request)
    {

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // session()->put('adminname',)
            session()->put('adminname', Auth::user()->name);


            return redirect()->route('admin');
        }else{
            // session()->flash('')
            return back()->withErrors(['err'=>'tài khoản hoặc mật khẩu không đúng']);
        }
    }
    public function dangky(Request $request)
    {
        // dd(Hash::make($request->password));
        User::create(['name' => $request->name, 'email' => $request->email, 'password' => Hash::make($request->password)]);

        // Create::user()

    }
    public function formdangnhap()
    {
       
        return view('admin.login.login');
    }
    public function logoutadmin()
    {
        if (session()->has('adminname')) {
            session()->pull('adminname');
            Auth::logout();
            
            return redirect()->route('formdangnhap');
        }
    }
}
