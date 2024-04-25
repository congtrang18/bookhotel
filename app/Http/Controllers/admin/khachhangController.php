<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\khachhangModel;
use Illuminate\Http\Request;

class khachhangController extends Controller
{
    protected $khachhang = "";
    public function __construct()
    {
        $this->khachhang = new khachhangModel();
    }
    public function listkhachhang()
    {
        return view("admin.khachhang.list", ["listkhachhang" => $this->khachhang->listkhachhang()]);
    }
    public function formeditkhachhang(Request $request)

    {
        return view("admin.khachhang.edit", ["editkhachhang" => $this->khachhang->editkhachhang($request->id)]);
    }
    public function updatekhachhang(Request $request)
    {
        $data = [
            "role" => $request->role
        ];
        $this->khachhang->updatekhachhang($request->id, $data);
        return  redirect()->route("khachhang");
    }
}
