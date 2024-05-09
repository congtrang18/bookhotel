<?php

use App\Http\Controllers\admin\checkloginAdmin;
use App\Http\Controllers\user\danhgiaController;
use App\Http\Controllers\admin\khachhangController;
use App\Http\Controllers\user\khachhangController as khachhangUser;
use App\Http\Controllers\admin\Listloaiphong;
use App\Http\Controllers\admin\phong;

use App\Http\Controllers\user\phongController;
use App\Http\Controllers\user\trangchuController;

use Illuminate\Support\Facades\Route;



Route::get('/', [trangchuController::class, "trangchu"])->name("trangchu");
Route::get('/detail', [phongController::class, 'detailPhong'])->name("detail");
Route::get('/phongyeuthich', [phongController::class, 'getallphongyeuthich'])->name("getallphongyeuthich");

Route::post('/addphongyeuthich', [phongController::class, 'phongyeuthich'])->name("roomlove");
Route::get('/deletephongyeuthich', [phongController::class, 'xoaphongyeuthich'])->name("deletephongyeuthich");

Route::get('/formdangnhap', [khachhangUser::class, 'formdangnhap'])->name("formdangnhapuser");
Route::post('/dangnhap', [khachhangUser::class, 'dangnhap'])->name("dangnhapuser");
Route::get('/quanlytaikhoan', [khachhangUser::class, 'formquanlytaikhoan'])->name("qltk");
Route::post('/capnhattaikhoan', [khachhangUser::class, 'quanlytaikhoan'])->name("suatk");



Route::get('/dangxuat', [khachhangUser::class, 'dangxuatuser'])->name("dangxuatuser");



Route::get('/formdangky', [khachhangUser::class, 'formdangky'])->name("formdangky");
Route::post('/dangky', [khachhangUser::class, 'dangky'])->name("dangky");

Route::get('/room', [phongController::class, "listphong"])->name("room");
Route::get('/danhgia', [danhgiaController::class, 'listdanhgia'])->name('feedback');
Route::get('/lienhe', function(){
    return view("client/lienhe");
})->name('lienhe');


// admin
Route::prefix("/admin")->middleware('checkloginAdmin')->group(function () {
    // dd(asset("/admin/"));
    Route::get("/", function () {
        return view("admin/index");
        // echo 2;
    })->name('admin');

    Route::get("/listloaiphong", [Listloaiphong::class, "index"])->name("listloaiphong");
    Route::get("/delete", [Listloaiphong::class, "delete"])->name("delete");
    Route::get("/formedit", [Listloaiphong::class, "formedit"])->name("formedit");
    Route::post("/update", [Listloaiphong::class, "update"])->name("update");
    Route::get("/formadd", [Listloaiphong::class, "formadd"])->name("formadd");
    Route::post("/add", [Listloaiphong::class, "add"])->name("adddm");
    Route::get("/phong", [phong::class, "phong"])->name("phong");
    Route::get("/formaddphong", [phong::class, "formaddphong"])->name("formaddphong");
    Route::get("/formaddanhphong", [phong::class, "formaddanhphong"])->name("formaddanhphong");
    Route::post("/addanhphong", [phong::class, "addanhphong"])->name("addanhphong");


    Route::post("/addphong", [phong::class, "addphong"])->name("addphong");
    Route::get("/deletephong", [phong::class, "deletephong"])->name("deletephong");
    Route::get("/formeditphong", [phong::class, "formeditphong"])->name("formeditphong");
    Route::post("/updatephong", [phong::class, "capnhat"])->name("updatephong");

    Route::get("/khachhang", [khachhangController::class, "listkhachhang"])->name("khachhang");
    Route::get("/formeditkhachhang", [khachhangController::class, "formeditkhachhang"])->name("formeditkhachhang");
    Route::post("/updatekhachhang", [khachhangController::class, "updatekhachhang"])->name("updatekhachhang");

    // đánh giá
    Route::get("/danhgia", [danhgiaController::class, "danhgia"])->name("danhgia");
    Route::get("/deletedanhgia", [danhgiaController::class, "xoadanhgia"])->name("deletedanhgia");
});
Route::get('/admin/formdangnhap', [checkloginAdmin::class, 'formdangnhap'])->name('formdangnhap');
Route::post('/admin/dangnhap', [checkloginAdmin::class, 'checklogin'])->name('dangnhap');
Route::get('/admin/quenmk', function () {
    return view('admin.login.quenmk');
})->name('quenmk');
