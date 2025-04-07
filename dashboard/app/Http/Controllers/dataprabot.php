<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dataprabot extends Controller
{
    public function index(){
        return view('dashboard.halamanutama');
    }

    public function tambah(){
        return view('dashboard.tambah');
    }
}
