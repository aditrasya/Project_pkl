<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [MainController::class, 'tampil'])->name('tampil');

Route::prefix('/input')->group(function () {
    Route::get('/',[MainController::class,'input'])->name('input');    
    Route::post('/simpan',[MainController::class,'simpan'])->name('input.simpan');
});
