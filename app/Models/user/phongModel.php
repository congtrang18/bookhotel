<?php

namespace App\Models\user;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class phongModel extends Model
{
    public function phong($id)
    {
        return  DB::table('phong')->join("loai_phong", "phong.id_loai_phong", "loai_phong.id")->select("phong.*", "loai_phong.ten as tenloaiphong")->where("loai_phong.id", $id)->get();
    }
    public function detailanhphong($id)
    {
        return DB::table("phong")->join('chi_tiet_phong', 'phong.id', '=', 'chi_tiet_phong.id_phong')->where('phong.id', $id)->get();
    }
    public function tenphong($id)
    {
        return DB::select("SELECT phong.ten as ten_phong,loai_phong.ten as ten_loai_phong,phong.id as idphong FROM phong JOIN loai_phong ON loai_phong.id=phong.id_loai_phong WHERE phong.id=$id;");
    }
    public function detailphong($id)
    {
        return DB::table("phong")->join('loai_phong', 'phong.id_loai_phong', '=', 'loai_phong.id')->where('phong.id', $id)->get();
    }
    public function phonglienquan($id, $idloaiphong)
    {
        return DB::select("SELECT * FROM `phong` WHERE phong.id <> $id AND phong.id_loai_phong=$idloaiphong;");
    }
    public function addphongyeuthich($idphong,$ngay_toi)
    {

        $phong = DB::table('phong')->where('id', $idphong)->first();
        // dd($phong);
        $data = [
            'ten_phong' => "$phong->ten",
            'gia_phong' => $phong->gia,
            'anh_phong' => "$phong->imgroom",
            'nguoi_lon'=>$phong->nguoi_lon,
            'tre_em'=>$phong->tre_em,
            'ngay_toi'=>$ngay_toi,
            'id_khach_hang' => session('idkh'),
            'id_phong' => $phong->id,

        ];


        DB::table('phong_yeu_thich')->insert($data);
    }
    public function getallphongyeuthich($idkh)
    {
        return  DB::table('phong_yeu_thich')->select('phong_yeu_thich.*', 'phong.id as idphong', 'loai_phong.id as idlp')
            ->join('phong', 'phong.id', 'phong_yeu_thich.id_phong')
            ->join('loai_phong', 'phong.id_loai_phong', 'loai_phong.id')
            ->where([

                'id_khach_hang' => $idkh
            ])->get();
    }
    public function xoaphongyeuthich($id)
    {
        DB::table('phong_yeu_thich')->delete($id);
    }
    public function getallbinhluanuser($idphong)
    {
        return DB::table('binh_luan')->join('khach_hang','khach_hang.id','binh_luan.id_kh')->where('id_phong', $idphong)->orderBy('id_bl','desc')->get();
    }
    public function guibinhluanuser($data){
        DB::table('binh_luan')->insert($data);
    }
}
