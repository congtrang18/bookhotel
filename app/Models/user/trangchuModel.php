<?php

namespace App\Models\user;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class trangchuModel extends Model
{
    // use HasFactory;
    public function trangchu(){
        return DB::table("loai_phong")->get();
    }
    // public function phong(){
    //     return DB::table("phong")->get();
    // }
    public function formtimkiemphong(){
        return DB::select("SELECT phong.*,loai_phong.ten as 'tenloaiphong' FROM `phong` JOIN loai_phong ON loai_phong.id=phong.id_loai_phong");
    }

}
