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
    public function formaddanhphong(Request $request)
    {


        return view("admin.phong.addanhphong", ['id' => $request->id]);
    }
    public function addanhphong(Request $request)
    {
        $id = $request->id;
        foreach ($_FILES['anh']['tmp_name'] as $key => $item) {
            $name = time() . $_FILES['anh']['name'][$key];
            $upload_img = public_path("upload_img/") . $name;
            move_uploaded_file($_FILES['anh']['tmp_name'][$key], $upload_img);
            $data = [
                'id_phong' => $id,
                'anh_phongs' => $name
            ];
            $this->phong->chitietphong($data);
        }
        return redirect()->route("phong");


        //    
    }

    public function addphong(RequestsPhong $request)
    {
        $name = time() . $_FILES['imgroom']['name'];
        $upload_img = public_path("upload_img/") . $name;
        // dd($upload_img);
        // die;
        move_uploaded_file($_FILES['imgroom']['tmp_name'], $upload_img);

        $data = [
            'ten' => $request->ten,
            'imgroom' => $name,
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
    public function formeditphong(Request $request)
    {
        // $this->phong->editroom($request->id);
        return view("admin.phong.edit", [
            'editphong' =>  $this->phong->editroom($request->id),
            "loaiphong" => $this->phong->danhmucloaiphong()
        ]);
    }
    public function capnhat(RequestsPhong $request)
    {
        $dataold = $this->phong->editroom($request->id);
        // dd($dataold);
        if ($_FILES['imgroom']['name'] == '') {
            $img = $dataold[0]->imgroom;
        } else {
            unlink(public_path("upload_img/") . $dataold[0]->imgroom);
            $img = time() . $_FILES['imgroom']['name'];
            $upload_img = public_path("upload_img/") . $img;
            move_uploaded_file($_FILES['imgroom']['tmp_name'], $upload_img);
        }

        $data = [
            'ten' => $request->ten,
            'imgroom' => $img,
            'gia' => $request->gia,
            'dien_tich' => $request->dien_tich,
            'huong_nhin' => $request->huong_nhin,
            'giuong' => $request->giuong,
            'sl_nguoi' => $request->sl_nguoi,
            'mo_ta' => $request->mo_ta,
            'id_loai_phong' => $request->id_loai_phong,
        ];
        $this->phong->capnhat($data, $request->id);
        // dd($data);
        // die;
        //    dd( $this->phong->capnhat($data,$request->id));
        //    die;
        return redirect()->route("phong");
    }
}
