<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\listloaiphong as RequestsListloaiphong;
use App\Models\admin\loaiphong;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\confirm;
// use function League\Flysystem\Local\unlink;

class Listloaiphong extends Controller
{
    //

    public function index()
    {
        $listloaiphong = new loaiphong();
        // dd($listloaiphong);
        // die;

        return view("admin/loaiphong/list", ["list" => $listloaiphong->index()]);
    }
    public function delete(Request $request)
    {
        $xoa = new loaiphong();
        $xoa->xoa($request->id);
        return redirect()->route("listloaiphong");
    }
    public function formedit(Request $request)
    {
        $edit = new loaiphong();

        return view("admin/loaiphong/edit", ["edit" => $edit->getoneroom($request->id)]);
    }
    public function update(RequestsListloaiphong $request)
    {
        $update = new loaiphong();

        $getoneroom = $update->getoneroom($request->id);
        $imageName = "";
        if (!$request->hasFile("avatar")) {
            $imageName = $getoneroom[0]->avatar;
        } else {

            unlink(public_path("upload_img/") . $getoneroom[0]->avatar);
            // unlink()
            $image = $request->file('avatar');
            $imageName = time() . '.' . $image->getClientOriginalName();

            $image->move(public_path('upload_img'), $imageName);
            // dd($upload);

            // dd($db);
        }
        $data = ["ten" => "$request->namedm", "avatar" => "$imageName"];
        $update->capnhat($data, $request->id);
        // dd($data);
        // dd($request->namedm);
        return redirect()->route("listloaiphong");
    }
    public function formadd()
    {
        return view("admin/loaiphong/add");
    }
    public function add(RequestsListloaiphong $request)
    {
        $add = new loaiphong();
        $image = $request->file('avatar');
        $imageName = time() . '.' . $image->getClientOriginalName();
        $image->move(public_path('upload_img'), $imageName);
        // dd($upload);
        $data = ["ten" => "$request->namedm", "avatar" => "$imageName"];

        // DB::table('loai_phong')->insert($data);
        $add->add($data);
        // return view("admin/loaiphong/add");
        return redirect()->route("listloaiphong");
    }
}
