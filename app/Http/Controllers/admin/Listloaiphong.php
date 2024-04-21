<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\confirm;

class Listloaiphong extends Controller
{
    //
    
    public function index()
    {
        $listloaiphong = DB::table('loai_phong')->orderBy("id",'desc')
        ->get();
        // dd($listloaiphong);
        // die;
        return view("admin/loaiphong/list", ["list" => $listloaiphong]);
    }
    public function delete(Request $request)
    {

        DB::table('loai_phong')->delete($request->id);
        return redirect()->route("listloaiphong");
    }
    public function formedit(Request $request){
       $edit= DB::table("loai_phong")->where('id',$request->id)->get();

        return view("admin/loaiphong/edit",["edit"=>$edit]);
    }
    public function update(Request $request){
        $upload_img="../../../../public/upload_img/".time().$_FILES['avatar'];
    // Route::get("/formedit",[Listloaiphong::class,"formedit"])->name("formedit");
        $file=move_uploaded_file($_FILES['avatar']['tmp_name'],$upload_img);

        dd($file);
        $data=["ten"=>$request->namedm,"avatar"=>$request->avatar];
        dd($data);
        // dd($request->namedm);
        $db=DB::table("loai_phong")->update($data);
        dd($db);
    }
    public function formadd(){
        return view("admin/loaiphong/add");
        
    }
    public function add(Request $request){
        // dd();
        $nameimg=$request->file('avatar')->getClientOriginalName();
        $img=$request->file('avatar')->storeAs('public/upload_img',time()."$nameimg");
        $data=["ten"=>"$request->namedm","avatar"=>"$img"];
        // dd();
// dd($data);

        DB::table('loai_phong')->insert($data);
        
        // return view("admin/loaiphong/add");
        return redirect()->route("listloaiphong");

        
    }
}
