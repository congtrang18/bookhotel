<?php

use App\Http\Controllers\admin\danhgiaController;
use App\Http\Controllers\admin\khachhangController;
use App\Http\Controllers\admin\Listloaiphong;
use App\Http\Controllers\admin\phong;
use App\Http\Controllers\user\phongController;
use App\Http\Controllers\user\trangchuController;
use App\Models\admin\khachhangModel;
use Illuminate\Support\Facades\Route;

Route::get('/',[trangchuController::class,"trangchu"])->name("trangchu");
Route::get('/detail', function () {
    return view('client/detail');
});
Route::get('/login', function () {
    return view('client/login');
});
Route::get('/dangky', function () {
    return view('client/login');
});
Route::get('/room', [phongController::class,"listphong"])->name("room");
Route::get('/feedback', function () {
    return view('client/feeback');
});

// admin
Route::prefix("/admin")->group(function () {
    // dd(asset("/admin/"));
    Route::get("/", function () {
        return view("admin/index");
        // echo 2;
    });
    // Route::get("/listloaiphong",function(){
    //     return view("admin/loaiphong/list");
    // });
    Route::get("/listloaiphong", [Listloaiphong::class, "index"])->name("listloaiphong");
    Route::get("/delete", [Listloaiphong::class, "delete"])->name("delete");
    Route::get("/formedit", [Listloaiphong::class, "formedit"])->name("formedit");
    Route::post("/update", [Listloaiphong::class, "update"])->name("update");
    Route::get("/formadd", [Listloaiphong::class, "formadd"])->name("formadd");
    Route::post("/add", [Listloaiphong::class, "add"])->name("adddm");
    Route::get("/phong", [phong::class, "phong"])->name("phong");
    Route::get("/formaddphong", [phong::class, "formaddphong"])->name("formaddphong");
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
