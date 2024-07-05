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

        // dd(date('Y-m-d',strtotime('10-2-2004')));
        $request->validate([
            'ngay_den' => 'required',
            'ngay_kh' => 'required',
        ], [
            'ngay_den.required' => 'ngày đến bắt buộc phải nhập',
            'ngay_kh.required' => 'ngày khỏi hành bắt buộc phải nhập',

        ]);
        if (date('Y-m-d', strtotime($request->ngay_kh)) > date('Y-m-d', strtotime($request->ngay_den))) {
            return back()->withErrors(['ngay_kh' => 'ngày khởi hành phải nhỏ hơn ngày đến']);
        }
        if (date('Y-m-d', strtotime($request->ngay_kh)) < date('Y-m-d')) {
            return back()->withErrors([
                'ngay_kh' => 'ngày khởi hành phải lớn hơn hoặc bằng ngày của hiện tại',

            ]);
        }
        if (date('Y-m-d', strtotime($request->ngay_den)) < date('Y-m-d')) {

            return back()->withErrors([

                'ngay_den' => 'ngày đến phải lớn hoặc bằng ngày của hiện tại'
            ]);
        }

        // dd($request->all());
        return view('client.datphong', [
            'getallphongyth' => $this->phongyeuthich->datphongmodel(),
            'khachhang' => $this->phongyeuthich->khachhangdatphong(session('idkh')),
            'tongtien' => $this->phongyeuthich->tongtienphongdat(session('idkh'))
        ]);
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
    public function datphong()
    {
    }
}
