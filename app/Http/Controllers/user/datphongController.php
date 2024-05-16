<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\user\datphongModel;
use Illuminate\Http\Request;

class datphongController extends Controller
{
    //
    protected $phongyeuthich = '';
    public function __construct()
    {
        $this->phongyeuthich = new datphongModel();
    }
    public function formdatphong(Request $request)
    {
        $request->validate([
            'ngay_den' => 'required',
            'ngay_kh' => 'required',
        ], [
            'ngay_den.required' => 'ngày đến bắt buộc phải nhập',
            'ngay_kh.required' => 'ngày khỏi hành bắt buộc phải nhập',

        ]);
        
        // dd($request->all());
        return view('client.datphong', ['getallphongyth' => $this->phongyeuthich->datphongmodel(), 'khachhang' => $this->phongyeuthich->khachhangdatphong(session('idkh'))]);
    }
    public function datphongController()
    {
        // lấy tất cả phòng yêu thích ra rồi hiển thị ở form đặt phòng
        return view('client.datphong', ['getallphongyth' => $this->phongyeuthich->datphongmodel()]);
    }
    // sự đặt chỗ
    public function datcho1(Request $request)
    {
        if (isset($request->id)) {
            return view('client.cacbuocdatphong.chonngay', ['getphongyth' => $this->phongyeuthich->getonephongyth($request->id)]);
        }
        // echo 2;
        return view('client.cacbuocdatphong.chonngay', ['getphongyth' => $this->phongyeuthich->datphongmodel()]);
    }
    // public function datphong(){

    // }
    // public function datcho2()
    // {
    //     return view('client.cacbuocdatphong.chonngay');
    // }

}
