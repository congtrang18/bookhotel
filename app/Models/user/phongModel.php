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
}
