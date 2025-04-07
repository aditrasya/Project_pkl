@extends('layout')

@section('konten')


<div class="justify-between">
    <h4>List Data Pengaduan</h4>
    <div class="ms-auto">
        <a class="btn btn-success" href="{{ route('pengaduan_it.tambah') }}">Tambah Pengaduan <i class="bi bi-plus-square"></i></a>
    </div>
</div>

<table class="table">
    <tr>
        <th>No</th>
        <th>Id Pengaduan It</th>
        <th>Nama</th>
        <th>Bagian</th>
        <th>Pengaduan</th>
        <th>Update Pengaduan</th>
        <th>Aksi</th>
    </tr>
    @foreach($pengaduan_it as $no=>$data)
    <tr>
        <td>{{ $no+1 }}</td>
        <td>{{ $data->id_pengaduan_it}}</td>
        <td>{{ $data->nama }}</td>
        <td>{{ $data->bagian }}</td>
        <td>{{ $data->pengaduan }}</td>
        <td>{{ $data->update_pengaduan_it }}</td>
        <td>
            <div class="btn d-flex gap-3">
                <a href="{{ route('pengaduan_it.edit', $data->id_pengaduan_it) }}" class="btn btn-sm btn-warning">Edit  <i class="bi bi-pencil"></i></a>
                <a href="{{ route('pengaduan_it.update-pengaduan_it', $data->id_pengaduan_it) }}" class="btn btn-sm btn-success">Update  <i class="bi bi-calendar-plus"></i></a>
                <form action="{{ route('pengaduan_it.hapus', $data->id_pengaduan_it) }}" method="post">
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