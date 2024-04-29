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
    
}
