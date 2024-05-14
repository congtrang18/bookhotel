<?php

namespace App\Models\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class danhgiaModel extends Model
{
    // use HasFactory;
    public function danhgiamodel(){
        return DB::table('danh_gia')->join('khach_hang','khach_hang.id','danh_gia.id_khach_hang')->get();
    }
    public function insertdanhgia($data){
       DB::table('danh_gia')->insert($data);
    }
    public function hienthikhachhang($id){
        return DB::table('khach_hang')->where('id',$id)->first();
    }
}
