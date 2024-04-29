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
}
