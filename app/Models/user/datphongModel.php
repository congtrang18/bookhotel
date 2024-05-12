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
        return DB::table('phong_yeu_thich')->get();
    }
    public function khachhangdatphong($id){
        // lấy tất cả phòng yêu thích ra.
        return DB::table('khach_hang')->where('id',$id)->first();
    }
    
}
