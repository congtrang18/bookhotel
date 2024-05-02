<?php

namespace App\Models\user;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class khachhangModel extends Model
{
    // use HasFactory;
 
   
    public function dangky($data){
        // dd($data);
        DB::table('khach_hang')->insert($data);
    }
    
}
