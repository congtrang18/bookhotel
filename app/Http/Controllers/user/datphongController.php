<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\user\datphongModel;
use Illuminate\Http\Request;

class datphongController extends Controller
{
    //
    protected $phongyeuthich='';
    public function __construct()
    {
        $this->phongyeuthich=new datphongModel();
    }
    public function formdatphong(){
        return view('client.datphong',['getallphongyth'=>$this->phongyeuthich->datphongmodel(),'khachhang'=>$this->phongyeuthich->khachhangdatphong(session('idkh'))]);
    }
    public function datphongController(){
            // lấy tất cả phòng yêu thích ra rồi hiển thị ở form đặt phòng
            return view('client.datphong',['getallphongyth'=>$this->phongyeuthich->datphongmodel()]);
    }
}
