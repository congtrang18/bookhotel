<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class phong extends Model
{
    public function index(){
      return  DB::table('phong')->join("loai_phong","phong.id_loai_phong","loai_phong.id")->select("phong.*","loai_phong.ten as tenloaiphong")->get();
    }
    public function danhmucloaiphong(){
        return DB::table('loai_phong')->get(); 
    }
    public function addphong($data){
        DB::table("phong")->insert($data);

    }
    public function editroom($id){
      return  DB::table("phong")
      ->join("loai_phong","phong.id_loai_phong","loai_phong.id")
      ->select("phong.*","loai_phong.ten as tenloaiphong")
      ->where("phong.id",$id)->get();

    }
    public function capnhat($data,$id){
     
        DB::table("phong")->where('id',$id)->update($data);
        
    }
    public function chitietphong($data){
      DB::table("chi_tiet_phong")->insert($data);
    }
}

