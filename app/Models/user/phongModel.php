<?php

namespace App\Models\user;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class phongModel extends Model
{
    public function phong($id){
        return  DB::table('phong')->join("loai_phong","phong.id_loai_phong","loai_phong.id")->select("phong.*","loai_phong.ten as tenloaiphong")->where("loai_phong.id",$id)->get();

    }
    public function detailanhphong($id){
        return DB::table("phong")->join('chi_tiet_phong','phong.id','=','chi_tiet_phong.id_phong')->where('phong.id',$id)->get();
    }
    public function tenphong($id){
        return DB::select("SELECT phong.ten as ten_phong,loai_phong.ten as ten_loai_phong FROM phong JOIN loai_phong ON loai_phong.id=phong.id_loai_phong WHERE phong.id=$id;");
    }
    public function detailphong($id){
        return DB::table("phong")->join('loai_phong','phong.id_loai_phong','=','loai_phong.id')->where('phong.id',$id)->get();
    }
    public function phonglienquan($id,$idloaiphong){
        return DB::select("SELECT * FROM `phong` WHERE phong.id <> $id AND phong.id_loai_phong=$idloaiphong;");
    }
}
