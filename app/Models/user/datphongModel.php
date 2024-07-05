<?php

namespace App\Models\user;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class datphongModel extends Model
{
    // use HasFactory;
    public function datphongmodel(){
        // lấy tất cả phòng yêu thích ra.
        return DB::table('phong_yeu_thich')->join('phong','phong_yeu_thich.id_phong','phong.id')->select('phong.*','phong_yeu_thich.*')->get();
    }
    public function getonephongyth($idphongyth){
        // lấy 1 phòng yêu thích
        return DB::table('phong_yeu_thich')->join('phong','phong_yeu_thich.id_phong','phong.id')->select('phong.*','phong_yeu_thich.*')->where('phong_yeu_thich.id',$idphongyth)->get();

    }
    public function tongtienphongdat($idkh){
        return DB::select("SELECT SUM(phong_yeu_thich.gia_phong) AS 'tongtien' FROM `phong_yeu_thich` JOIN phong ON phong_yeu_thich.id_phong=phong.id WHERE phong_yeu_thich.id_khach_hang=$idkh;");
    }
    public function khachhangdatphong($id){
        // lấy tất cả phòng yêu thích ra.
        return DB::table('khach_hang')->where('id',$id)->first();
    }
    public function dat_phong($data){
        DB::table('dat_phong')->insert($data);
    }

    
}
