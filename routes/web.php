<?php

use App\Http\Controllers\admin\Listloaiphong;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('client/trangchu');
});
Route::get('/detail', function () {
    return view('client/detail');
});
Route::get('/login', function () {
    return view('client/login');
});
Route::get('/dangky', function () {
    return view('client/login');
});
Route::get('/room', function () {
    return view('client/room');
});
Route::get('/feeback', function () {
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
    Route::get("/listloaiphong",[Listloaiphong::class,"index"])->name("listloaiphong");
    Route::get("/delete",[Listloaiphong::class,"delete"])->name("delete");
    Route::get("/formedit",[Listloaiphong::class,"formedit"])->name("formedit");
    Route::post("/update",[Listloaiphong::class,"update"])->name("update");
    Route::get("/formadd",[Listloaiphong::class,"formadd"])->name("formadd");
    Route::post("/add",[Listloaiphong::class,"add"])->name("adddm");





});
// Route::get("/admin",function(){
// echo 1;
// });
