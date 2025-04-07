<?php

use App\Http\Controllers\dataprabot;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[dataprabot::class, 'index'])->name('dashboard.halamanutama');
