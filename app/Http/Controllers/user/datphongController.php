<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class datphongController extends Controller
{
    //
    public function formdatphong(){
        return view('client.datphong');
    }
}
