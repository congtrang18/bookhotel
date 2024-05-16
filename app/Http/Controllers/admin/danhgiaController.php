<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\danhgiaModel;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class danhgiaController extends Controller
{
    //
    protected $danhgia="";
    public function __construct()
    {
        $this->danhgia=new danhgiaModel();
    }
    public function danhgia(){
        return view("admin.danhgia.list",['listdanhgia'=>$this->danhgia->danhgia()]);
    }
    public function xoadanhgia(Request $request){
      
        $this->danhgia->xoa($request->id);
        return redirect()->route("danhgia");
    }
}