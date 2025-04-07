<?php

namespace App\Http\Controllers;

use App\Models\input;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //

    // function tampil() {
    //     $data = input::paginate(10);
    //     return view('page.tampil',compact('data'));
    // }

    public function tampil(Request $request) {
        // Ambil parameter start_date dan end_date dari query string
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
    
        // Ambil data dengan filter berdasarkan tanggal jika keduanya ada
        if ($start_date && $end_date) {
            $data = input::whereBetween('tanggal', [$start_date, $end_date])
                         ->paginate(10);
        } elseif ($start_date) {
            $data = input::where('tanggal', '>=', $start_date)
                         ->paginate(10);
        } elseif ($end_date) {
            $data = input::where('tanggal', '<=', $end_date)
                         ->paginate(10);
        } else {
            // Jika tidak ada filter, tampilkan semua data
            $data = input::paginate(10);
        }
    
        // Mengirim data ke view
        return view('page.tampil', compact('data'));
    }

    function input() {
        return view('page.tambah');
    }

    public function simpan(Request $request)
    {
        // simpan data ( simple )
        $data = new input();
        $data->zona = $request->zona;
        $data->unit = $request->unit;
        $data->kode_wilayah = $request->kode_wilayah;
        $data->kode_blok = $request->kode_blok;
        $data->no_ktp = $request->no_ktp;
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->alamat = $request->alamat;
        $data->kecamatan = $request->kecamatan;
        $data->kelurahan = $request->kelurahan;
        $data->rt = $request->rt;
        $data->rw = $request->rw;
        $data->no_hp = $request->no_hp;
        $data->pekerjaan = $request->pekerjaan;
        $data->tetap = $request->tetap;
        $data->tidak_tetap = $request->tidak_tetap;
        $data->tarif = $request->tarif;
        $data->tanah = $request->tanah;
        $data->bangunan = $request->bangunan;
        $data->jalan = $request->jalan;
        $data->biayabp = $request->biayabp;
        $data->bayarbp = $request->bayarbp;
        $data->sisabp = $request->sisabp;
        $data->tanggal = $request->tanggal;
        $data->save();

        return redirect()->route('input')->with('success', 'inputan berhasil ditambahkan');
    }
}
