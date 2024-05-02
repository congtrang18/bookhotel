<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\user\khachhangModel;
use App\Http\Requests\khachhangUser as requestKhachhangUser;

class khachhangController extends Controller
{
    protected $khachhanguser="";
    public function __construct()
    {
     $this->khachhanguser=new khachhangModel();   
    }
    public function formdangky(){
        return view("client.dangky");
    }
    public function dangky(requestKhachhangUser $request){
        $name=time().$_FILES['avatar']['name'];
        $upload_img=public_path("upload_img/").$name;
        move_uploaded_file($_FILES['avatar']['tmp_name'],$upload_img);
        $data=[
            'ten'=>$request->ten,
            'email'=>$request->email,
            'mat_khau'=>$request->mat_khau,
            'avatar'=> $name,
        ];
        $this->khachhanguser->dangky($data);
        return redirect()->route("trangchu");
    }
    public function formdangnhap(){
        return view("client.login");
    }
}
