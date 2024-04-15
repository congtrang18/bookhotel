<?php

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