@extends('layout')

@section('konten')


<div class="justify-between">
    <h4>List Data Pengaduan</h4>
    <div class="ms-auto">
        <a class="btn btn-success" href="{{ route('pengaduan.tambah') }}">Tambah Pengaduan <i class="bi bi-plus-square"></i></a>
    </div>
</div>

<table class="table">
    <tr>
        <th>No</th>
        <th>Id Pengaduan</th>
        <th>Id pelanggan</th>
        <th>pelanggan</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>No Hp</th>
        <th>Keluhan</th>
        <th>Pegawai</th>
        <th>Update Keluhan</th>
        <th>Aksi</th>
    </tr>
    @foreach($pengaduan as $no=>$data)
    <tr>
        <td>{{ $no+1 }}</td>
        <td>{{ $data->id_pengaduan}}</td>
        <td>{{ $data->pelanggan->id_pelanggan}}</td>
        <td>{{ $data->pelanggan->cabang }}</td>
        <td>{{ $data->pelanggan->nama }}</td>
        <td>{{ $data->pelanggan->alamat }}</td>
        <td>{{ $data->pelanggan->no_hp }}</td>
        <td>{{ $data->keluhan }}</td>
        <td>{{ $data->pegawai }}</td>
        <td>{{ $data->update_keluhan }}</td>
        <td>
            <div class="btn d-flex gap-3">
            <a href="{{ route('pengaduan.edit', $data->id_pengaduan) }}" class="btn btn-sm btn-warning">Edit  <i class="bi bi-pencil"></i></a>
                <form action="{{ route('pengaduan.delete', $data->id_pengaduan) }}" method="post">
                    @csrf
                    <button class="btn btn-danger">Hapus <i class="bi bi-trash"></i></button>
                </form>
            </div>
        </td>
    </tr>
    @endforeach
</table>

@endsection