<?php

namespace App\Http\Controllers;

use App\Models\Datapelanggan;
use Illuminate\Http\Request;

class DatapelangganController extends Controller
{
    function tampil() {
        $datapelanggan = Datapelanggan::get();
        return view('datapelanggan.tampil', compact('datapelanggan'));
    }

    function tambah() {
        return view('datapelanggan.tambah');
    }

    function submit(Request $request) {
        $datapelanggan = new Datapelanggan();
        $datapelanggan->cabang = $request->cabang;
        $datapelanggan->nama = $request->nama;
        $datapelanggan->alamat = $request->alamat;
        $datapelanggan->no_hp = $request->no_hp;
        $datapelanggan->kel_pelanggan = $request->kel_pelanggan;
        $datapelanggan->save();

        return redirect()->route('datapelanggan.tampil');
    }

    function edit($id) {
        $datapelanggan = Datapelanggan::find($id);
        return view('datapelanggan.edit', compact('datapelanggan'));
    }

    function update(Request $request, $id) {
        $datapelanggan = Datapelanggan::find($id);
        $datapelanggan->cabang = $request->cabang;
        $datapelanggan->nama = $request->nama;
        $datapelanggan->alamat = $request->alamat;
        $datapelanggan->no_hp = $request->no_hp;
        $datapelanggan->kel_pelanggan = $request->kel_pelanggan;
        $datapelanggan->update();

        return redirect()->route('datapelanggan.tampil');
    }

    function delete($id) {
        $datapelanggan = Datapelanggan::find($id);
        $datapelanggan->delete();
        return redirect()->route('datapelanggan.tampil');
    }
}
