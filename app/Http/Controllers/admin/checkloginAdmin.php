<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use App\Models\user\khachhangModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class checkloginAdmin extends Controller
{
    //
protected $admin='';
    public function __construct()
    {
     $this->admin=new khachhangModel();   
    }
    public function checklogin(Request $request)
    {

        // $user = session()->only(['user_data']);
        // foreach ($user as  $value) {
        //     session(['ten' => $value->ten]);
        // }
        // // dd(session('ten'));
        // return redirect()->route('admin');
        // $user=new khachhangModel();
        // $check=$user->dangnhap($request->email,$request->mat_khau);
        // if (!$check) {
        //     return back()->withErrors(['errors'=>"email hoặc mật khẩu không đúng"]);
        // }else{
        //    session(['ten'=>$check->ten]);
        //    return redirect()->route('admin');
        //     // return $next($request);
        // }
        // dd($request->all());
        // dd(User::all());
        // Lấy mật khẩu từ form đăng nhập
        // $password = $request->input('password');

        // Lấy đối tượng người dùng từ cơ sở dữ liệu
        // $user = User::where('email', $request->email)->first();
        // dd($user);
        $user=$this->admin->dangnhapAdmin($request->email,$request->password);
        // dd($user);
        // if () {
        //     // dd($request->all());
            // return redirect()->route('admin');
        // } else {
        //     return redirect()->route('formdangnhap')->withErrors(['msg' => 'tên tài khoản hoặc mật khẩu không đúng']);
        // }
        if (Auth::attempt(['email'=>$request->email,'password'=>$user->mat_khau,'role'=>1])) {
            # code...
            return redirect()->route('admin');

        }
    }
    public function formdangnhap(Request $request)
    {
        if (session()->has('ten')) {

            session()->forget('ten');
        }
        return view('admin.login.login');
    }
}
