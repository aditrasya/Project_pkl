<?php

use App\Http\Controllers\AgendaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[AgendaController::class,'index'])->name('agenda');
Route::get('/tambah',[AgendaController::class,'tambah'])->name('agenda.tambah');
Route::post('/simpan',[AgendaController::class,'simpan'])->name('agenda.simpan');
Route::get('/edit{id}',[AgendaController::class,'edit'])->name('agenda.edit');
Route::post('/update{id}',[AgendaController::class,'update'])->name('agenda.update');
Route::delete('/delete{id}',[AgendaController::class,'delete'])->name('agenda.delete');