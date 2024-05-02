<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\user\phongModel;
use Illuminate\Http\Request;

class phongController extends Controller
{
    //
    protected $phong="";
    public function __construct(){
        $this->phong=new phongModel();
    }
    public function listphong(Request $request){
        
        return view("client.room",["listphong"=>$this->phong->phong($request->id)]);
    }
    public function detailPhong(Request $request){
        return view("client.detail",["detailanhphong"=>$this->phong->detailanhphong($request->id),
        "tenphong"=>$this->phong->tenphong($request->id),
        "detailphong"=>$this->phong->detailphong($request->id),
        "phonglienquan"=>$this->phong->phonglienquan($request->id,$request->idloaiphong)
    ]);

    }
   
    
}
