@extends('layout')

@section('konten')


<div class="d-flex justify-content-between">
    <b><h4>List Data Pks</h4></b>
    <div class="d-flex gap-2">
        <a class="btn btn-success" href="{{ route('data_pks.tambah') }}">Tambah <i class="bi bi-plus-square"></i></a>
        <a class="btn btn-success" href="{{ route('pdf') }}">Export <i class="bi bi-file-earmark-earmark"></i></a>
    </div>
</div>


<table class="table">
    <tr>
        <th>No</th>
        <th>Tanggal</th>
        <th>Nama Perusahaan</th>
        <th>Golongan</th>
        <th>Minimum</th>
        <th>Tarif 1</th>
        <th>Tarif 2</th>
        <th>Tarif 3</th>
        <th>Masa Perjanjian</th>
        <th>Aksi</th>
    </tr>
    @foreach($data_pks as $no=>$data)
    <tr>
        <td>{{ $no+1 }}</td>
        <td>{{ $data->tanggal }}</td>
        <td>{{ $data->nama_perusahaan }}</td>
        <td>{{ $data->golongan }}</td>
        <td>{{ $data->minimum }}</td>
        <td>{{ $data->tarif_1 }}</td>
        <td>{{ $data->tarif_2 }}</td>
        <td>{{ $data->tarif_3 }}</td>
        <td>{{ $data->masa_perjanjian }}</td>
        <td>
            <div class="btn d-flex gap-3">
                <a href="{{ route('data_pks.edit', $data->id_data_pks) }}" class="btn btn-sm btn-warning">Edit  <i class="bi bi-pencil"></i></a>
                <form action="{{ route('data_pks.hapus', $data->id_data_pks) }}" method="post">
                    @csrf   
                    @method('DELETE')
                    <button class="btn btn-danger">Hapus <i class="bi bi-trash"></i></button>
                </form>
            </div>
        </td>
    </tr>
    @endforeach
</table>

@endsection