@extends('layout')

@section('konten')


<div class="justify-between">
    <h4>List Pelanggan</h4>
    <div class="ms-auto">
        <a class="btn btn-success" href="{{ route('datapelanggan.tambah') }}">Tambah Pelanggan <i class="bi bi-plus-square"></i></a>
    </div>
</div>

<table class="table">
    <tr>
        <th>No</th>
        <th>Id Pelanggan</th>
        <th>Cabang</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>No Hp</th>
        <th>Kel Pelanggan</th>
        <th>Aksi</th>
    </tr>
    @foreach($datapelanggan as $no=>$data)
    <tr>
        <td>{{ $no+1 }}</td>
        <td>{{ $data->id_pelanggan}}</td>
        <td>{{ $data->cabang }}</td>
        <td>{{ $data->nama }}</td>
        <td>{{ $data->alamat }}</td>
        <td>{{ $data->no_hp }}</td>
        <td>{{ $data->kel_pelanggan }}</td>
        <td>
            <div class="btn d-flex gap-3">
                <a href="{{ route('datapelanggan.edit', $data->id_pelanggan) }}" class="btn btn-sm btn-warning">Edit  <i class="bi bi-pencil"></i></a>
                <form action="{{ route('datapelanggan.delete', $data->id_pelanggan) }}" method="post">
                    @csrf
                    <button class="btn btn-danger">Hapus <i class="bi bi-trash"></i></button>
                </form>
            </div>
        </td>
    </tr>
    @endforeach
</table>

@endsection