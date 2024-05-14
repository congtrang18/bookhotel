<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\user\phongModel;
use Illuminate\Http\Request;

class phongController extends Controller
{
    //
    protected $phong = "";
    public function __construct()
    {
        $this->phong = new phongModel();
    }
    public function listphong(Request $request)
    {

        return view("client.room", ["listphong" => $this->phong->phong($request->id)]);
    }
    public function detailPhong(Request $request)
    {
        return view("client.detail", [
            "detailanhphong" => $this->phong->detailanhphong($request->id),
            "tenphong" => $this->phong->tenphong($request->id),
            "detailphong" => $this->phong->detailphong($request->id),
            "phonglienquan" => $this->phong->phonglienquan($request->id, $request->idloaiphong),
            'binhluan'=>$this->phong->getallbinhluanuser($request->id)
        ]);
    }
    public function phongyeuthich(Request $request)
    {
        // dd($request->ngay_toi);
        if (!session()->has('idkh')) {
            session()->flash('err', 'bạn cần đăng nhập để thực hiện chức năng');
            return back();
        }
        // $getonephong=

        $getallphongyeuthich = $this->phong->getallphongyeuthich(session('idkh'));
        // $phongyeuthich = DB::table('phong_yeu_thich')->get();
        $check = false;
        foreach ($getallphongyeuthich as  $value) {
        
            if ($value->id_phong == $request->idphong && $value->id_khach_hang == session('idkh')) {
                
                $check = true;
                session()->flash('phongdatontai', 'phòng đã tồn tại trong phòng yêu thích của bạn');
                return back();
            }
        }
        if (!$check) {
            $this->phong->addphongyeuthich($request->idphong,date('Y-m-d',strtotime($request->ngay_toi)));
            
            return redirect()->route('getallphongyeuthich');
        }
        // dd($getallphongyeuthich);
    }
    public function getallphongyeuthich()
    {
       if (session()->has('idkh')) {
        $getallphongyeuthich = $this->phong->getallphongyeuthich(session('idkh'));

        return view("client.phongyeuthich", ['phongyeuthich' => $getallphongyeuthich]);
       }
       return redirect()->route('formdangnhapuser');
        
    }
    public function xoaphongyeuthich(Request $request){
        $this->phong->xoaphongyeuthich($request->id);
        return back();
    }
    public function guibluser(Request $request){
        $rule=[
            'binhluan'=>'required'
        ];
        $message=[
            'binhluan.required'=>'bình luận bắt buộc phải nhập'
        ];
        $request->validate($rule,$message);
        $data=[
            'noi_dung'=>$request->binhluan,
            'ngay_bl'=>date('Y-m-d'),
            'id_phong'=>$request->idphong,
            'id_kh'=>session('idkh')
        ];
        $this->phong->guibinhluanuser($data);
        return redirect()->back();
    }
}
