<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\user\danhgiaModel;
use Illuminate\Http\Request;

class danhgiaController extends Controller
{
    //
    protected $danhgia='';
    public function __construct()
    {
        $this->danhgia=new danhgiaModel();
    }
    public function listdanhgia(){
        return view('client.feeback',['listdanhgia'=>$this->danhgia->danhgiamodel()]);
    }
}
