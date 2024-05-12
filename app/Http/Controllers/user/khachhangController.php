<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\user\khachhangModel;
use App\Http\Requests\khachhangUser as requestKhachhangUser;

use Illuminate\Http\Request as HttpRequest;

class khachhangController extends Controller
{
    protected $khachhanguser = "";
    public function __construct()
    {
        $this->khachhanguser = new khachhangModel();
    }
    public function formdangky()
    {
        return view("client.dangky");
    }
    public function dangky(requestKhachhangUser $request)
    {
        $name = time() . $_FILES['avatar']['name'];
        $upload_img = public_path("upload_img/") . $name;
        move_uploaded_file($_FILES['avatar']['tmp_name'], $upload_img);
        $data = [
            'ten' => $request->ten,
            'email' => $request->email,
            'mat_khau' => $request->mat_khau,
            'avatar' => $name,
        ];
        $this->khachhanguser->dangky($data);
        return redirect()->route("trangchu");
    }
    public function formdangnhap()
    {
        return view("client.login");
    }
    public function dangnhap(HttpRequest $request)
    {

        $login = $this->khachhanguser->dangnhapUser($request->email, $request->password);
        // dd($login);
        if ($login) {
            session(['ten' => $login->ten, 'idkh' => $login->id]);
            return redirect()->route('trangchu');
        } else {
            return back()->withErrors(['message' => "email hoặc mật khẩu không đúng"]);
        }
    }
    public function dangxuatuser()
    {
        session()->forget(['ten', 'idkh']);
        return redirect()->route('trangchu');
    }
    public function quanlytaikhoan(HttpRequest $request)
    {
        // dd($request->input()->only(['ten','email','mat_khau','sdt','dia_chi']));
        $data = [
            'ten' => $request->ten,
            'dia_chi' => $request->dia_chi,
            'email' => $request->email,
            'mat_khau' => $request->mat_khau,
            'sdt' => $request->sdt,

        ];
        $this->khachhanguser->capnhattkUser($data, session('idkh'));
        session()->flash('mes', 'cập nhật tài khoản thành công');
        return redirect()->route('qltk');

    }
    public function formquanlytaikhoan()
    {
        $qltk = $this->khachhanguser->formqltk(session('idkh'));
        return view('client.quanlytaikhoan', ['qltk' => $qltk]);
    }

    // sử dụng user của laravel
}
