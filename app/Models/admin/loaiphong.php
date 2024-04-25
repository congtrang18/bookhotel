<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class loaiphong extends Model
{
    public function index()
    {
        return  DB::table('loai_phong')->orderBy("id", 'desc')
            ->get();
    }
    public function add($data)
    {
        DB::table('loai_phong')->insert($data);
        // dd($insert);
    }
    public function capnhat($data,$id)
    {
        DB::table("loai_phong")->where("id",$id)->update($data);

        // dd($insert);
    }
    public function getoneroom($id){
       return DB::table("loai_phong")->where("id",$id)->get();
    }
    public function xoa($id){

        unlink(public_path("upload_img/") . $this->getoneroom($id)[0]->avatar);

        DB::table('loai_phong')->delete($id);

     }
     
    
    
}
