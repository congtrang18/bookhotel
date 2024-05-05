<?php

namespace App\Models\user;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class khachhangModel extends Model
{
    // use HasFactory;


    public function dangky($data)
    {
        // dd($data);
        DB::table('khach_hang')->insert($data);
    }
    public function dangnhapAdmin($email, $matkhau)
    {
        $user = DB::table('khach_hang')->where([
            ['email', $email],
            ['mat_khau', $matkhau],

        ])->exists();

        if ($user) {
            return DB::table('khach_hang')->where([
                ['email', $email],
                ['mat_khau', $matkhau],
                ['role', 1],


            ])->first();
        }else{
            return false;
        }
    }
    public function dangnhapUser($email, $matkhau)
    {
        $user = DB::table('khach_hang')->where([
            ['email', $email],
            ['mat_khau', $matkhau],

        ])->exists();

        if ($user) {
            return DB::table('khach_hang')->where([
                ['email', $email],
                ['mat_khau', $matkhau],
            ])->first();
        }else{
            return false;
        }
    }
    public function formqltk($id){
        // dd($id);
        return DB::table('khach_hang')->where('id',$id)->first();
    }
    public function capnhattkUser($data,$id){
        DB::table('khach_hang')->where('id',$id)->update($data);
    }
}
