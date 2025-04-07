<?php

namespace App\Http\Controllers;

use App\Models\agendaModel;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index()
    {
        $agenda = agendaModel::paginate(20);
        return view('agenda.agenda', compact('agenda'));
    }

    public function tambah()
    {
        return view('agenda.agenda_tambah');
    }

    public function simpan(request $request)
    {
        $request->validate([
            'tanggal' => 'required',
            'kegiatan' => 'required',
        ],
        [
            'tanggal.required' => 'tanggal harus diisi',
            'kegiatan.required' => 'kegiatan harus diisi',
        ]);

        //simpan data 
        $data = new agendaModel();
        $data->tanggal = $request->tanggal;
        $data->kegiatan = $request->kegiatan;
        $data->save();

        return redirect()->route('agenda')->with('succes', 'inputan berhasil ditambahkan');
    }

    public function edit($id)
    {
        $agenda = agendaModel::findOrFail($id);
        return view('agenda.agenda_edit', compact('agenda'));    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggal' => 'required',
            'kegiatan' => 'required',
        ],
        [
            'tanggal.required' => 'tanggal harus diisi',
            'kegiatan.required' => 'kegiatan harus diisi',
        ]);

        //simpan data 
        $data =  agendaModel::findOrFail($id);
        $data->tanggal = $request->tanggal;
        $data->kegiatan = $request->kegiatan;
        $data->save();

        return redirect()->route('agenda')->with('succes', 'inputan berhasil ditambahkan');
    }

    public function delete($id)
    {
        try {
            agendaModel::where('id_agenda', $id)->delete();
            return to_route('agenda');
        } catch (\Exception $e) {
            return to_route('agenda')->withErrors('gagal hapus');
        }
    }
}
