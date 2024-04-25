<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\phong as RequestsPhong;
use App\Models\admin\phong as AdminPhong;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class phong extends Controller
{
    //
    private $phong = "";
    public function __construct()
    {
        $this->phong = new AdminPhong();
    }
    public function phong()
    {
        $list = $this->phong->index();
        //    dd($list);
        return view("admin.phong.list", ['listphong' => $list]);
    }
    public function formaddphong()
    {
        // $data=['ten'=>$request-];
        $loaiphong = $this->phong->danhmucloaiphong();

        return view("admin.phong.add", ['loaiphong' => $loaiphong]);
    }

    public function addphong(RequestsPhong $request)
    {
        // dd($request->request);
        $data = [
            'ten' => $request->ten,
            'gia' => $request->gia,
            'dien_tich' => $request->dien_tich,
            'huong_nhin' => $request->huong_nhin,
            'giuong' => $request->giuong,
            'sl_nguoi' => $request->sl_nguoi,
            'mo_ta' => $request->mo_ta,
            'id_loai_phong' => $request->id_loai_phong,
        ];
        $this->phong->addphong($data);
        return redirect()->route("phong");
    }
    public function deletephong(Request $request)
    {

        DB::table('phong')->delete($request->id);
        return redirect()->route("phong");
    }
    public function formeditphong(Request $request){
        // $this->phong->editroom($request->id);
        return view("admin.phong.edit", ['editphong' =>  $this->phong->editroom($request->id),
        "loaiphong"=>$this->phong->danhmucloaiphong()]);
        
    }
    public function capnhat(RequestsPhong $request){
        
// dd($request);
// die;
        $data = [
            'ten' => $request->ten,
            'gia' => $request->gia,
            'dien_tich' => $request->dien_tich,
            'huong_nhin' => $request->huong_nhin,
            'giuong' => $request->giuong,
            'sl_nguoi' => $request->sl_nguoi,
            'mo_ta' => $request->mo_ta,
            'id_loai_phong' => $request->id_loai_phong,
        ];
        $this->phong->capnhat($data,$request->id);
        // dd($data);
        // die;
    //    dd( $this->phong->capnhat($data,$request->id));
    //    die;
        return redirect()->route("phong");
    }
    
}
