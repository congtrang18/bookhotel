<?php

namespace App\Models\admin;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class khachhangModel extends Model
{

    public function listkhachhang()
    {
        return DB::table('khach_hang')->orderByDesc("id")->get();
    }
    public function editkhachhang($id)
    {
        return DB::table('khach_hang')->where("id", $id)->get();
    }
    public function updatekhachhang($id,$data)
    {
        return DB::table('khach_hang')->where("id", $id)->update($data);
    }
}
