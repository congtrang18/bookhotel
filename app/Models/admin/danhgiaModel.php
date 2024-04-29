<?php

namespace App\Models\admin;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class danhgiaModel extends Model
{
    // use HasFactory;
    public function danhgia()
    {
        return DB::table('danh_gia')->select("danh_gia.*","khach_hang.ten")->join("khach_hang", "khach_hang.id", "danh_gia.id_khach_hang")->get();
    }
    public function xoa($id)
    {
        DB::table('danh_gia')->delete($id);
    }
}
