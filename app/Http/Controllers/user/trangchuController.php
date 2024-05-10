<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\user\trangchuModel;
use Illuminate\Http\Request;


class trangchuController extends Controller
{
    //
    protected $trangchu = "";
    public function __construct()
    {
        $this->trangchu = new trangchuModel();
    }
    public function trangchu()
    {
        return view('client.trangchu', ["listloaiphong" => $this->trangchu->trangchu()]);
    }
    public function header(){
       $listloaiphong=$this->trangchu->trangchu();
    //    dd($listloaiphong);
    return $listloaiphong;
    }
    public function timkiemphongController(){
        $findroom=$this->trangchu->formtimkiemphong();
        return $findroom;
    }
   
}
