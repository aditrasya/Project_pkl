<?php

use App\Http\Controllers\DatapelangganController;
use App\Http\Controllers\pengaduan_itController;
use App\Http\Controllers\PengaduanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/datapelanggan', [DatapelangganController::class, 'tampil'])->name('datapelanggan.tampil');
Route::get('/datapelanggan/tambah', [DatapelangganController::class, 'tambah'])->name('datapelanggan.tambah');
Route::post('/datapelanggan/submit', [DatapelangganController::class, 'submit'])->name('datapelanggan.submit');
Route::get('/datapelanggan/edit/{id}', [DatapelangganController::class, 'edit'])->name('datapelanggan.edit');
Route::post('/datapelanggan/update/{id}', [DatapelangganController::class, 'update'])->name('datapelanggan.update');
Route::post('/datapelanggan/delete/{id}', [DatapelangganController::class, 'delete'])->name('datapelanggan.delete');


Route::get('/pengaduan', [PengaduanController::class, 'tampil'])->name('pengaduan.tampil');
Route::get('/pengaduan/tambah', [PengaduanController::class, 'tambah'])->name('pengaduan.tambah');
Route::post('/pengaduan/submit', [PengaduanController::class, 'submit'])->name('pengaduan.submit');
Route::post('/pengaduan/delete/{id}', [PengaduanController::class, 'delete'])->name('pengaduan.delete');
Route::get('/pengaduan/edit/{id}', [PengaduanController::class, 'edit'])->name('pengaduan.edit');
Route::post('/pengaduan/update/{id}', [PengaduanController::class, 'update'])->name('pengaduan.update');


Route::get('/pengaduan_it',[pengaduan_itController::class,'index'])->name('pengaduan_it');
Route::get('/pengaduan_it-tambah',[pengaduan_itController::class,'tambah'])->name('pengaduan_it.tambah');
Route::post('/pengaduan_it-submit',[pengaduan_itController::class,'submit'])->name('pengaduan_it.submit');
Route::delete('/pengaduan_it-hapus{id}',[pengaduan_itController::class,'hapus'])->name('pengaduan_it.hapus');
Route::get('/pengaduan_it-edit{id}',[pengaduan_itController::class,'edit'])->name('pengaduan_it.edit');
Route::post('/pengaduan_it-update{id}',[pengaduan_itController::class,'update'])->name('pengaduan_it.update');
Route::get('/pengaduan_it-update-pengaduan_it{id}',[pengaduan_itController::class,'update_pengaduan_it'])->name('pengaduan_it.update-pengaduan_it');
Route::post('/pengaduan_it-submit-pengaduan_it{id}',[pengaduan_itController::class,'submit_pengaduan_it'])->name('pengaduan_it.submit-pengaduan_it');