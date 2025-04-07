<?php

namespace App\Http\Controllers;

use App\Models\Datapelanggan;
use App\Models\Pengaduan;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    function tampil() {
        $pengaduan = Pengaduan::get();
        return view('pengaduan.tampil_pengaduan', compact('pengaduan'));
    }

    function tambah() {
        $pengaduan = Pengaduan::with('pelanggan')->get();
        $pelanggan = Datapelanggan::all();
        return view('pengaduan.tambah_pengaduan', compact('pelanggan', 'pengaduan'));
    }

    function submit(Request $request) {
        $pengaduan = new Pengaduan();
        $pengaduan->id_pelanggan = $request->id_pelanggan;
        $pengaduan->keluhan = $request->keluhan;
        $pengaduan->save();

        return redirect()->route('pengaduan.tampil');
    }

    function delete($id) {
        $pengaduan = Pengaduan::find($id);
        $pengaduan->delete();
        return redirect()->route('pengaduan.tampil');
    }

    function edit($id) {
        $pengaduan = Pengaduan::find($id);
        return view('pengaduan.edit_pengaduan', compact('pengaduan'));
    }

    function update(Request $request, $id) {
        $pengaduan = Pengaduan::find($id);
        $pengaduan->keluhan = $request->keluhan;
        $pengaduan->pegawai = $request->pegawai;
        $pengaduan->update_keluhan = $request->update_keluhan;
        $pengaduan->update();

        return redirect()->route('pengaduan.tampil');
    }
}
