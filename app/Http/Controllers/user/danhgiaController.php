<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\user\danhgiaModel;
// use Illuminate\Http\Request;
use App\Http\Requests\danhgiaUser;

class danhgiaController extends Controller
{
    //
    protected $danhgia = '';
    public function __construct()
    {
        $this->danhgia = new danhgiaModel();
    }
    public function listdanhgia()
    {
        return view('client.feeback', [
            'listdanhgia' => $this->danhgia->danhgiamodel(),
            'user' => $this->danhgia->hienthikhachhang(session('idkh'))
        ]);
    }
    public function guidanhgia(danhgiaUser $request)
    {
        $data = [

            'tieu_de' => $request->tieu_de,
            'ghi_chu' => $request->ghi_chu,
            'id_khach_hang' => $request->id_khach_hang,

        ];
        //    dd($request->input());
        $this->danhgia->insertdanhgia($data);
        return redirect()->route('feedback');
    }
}
