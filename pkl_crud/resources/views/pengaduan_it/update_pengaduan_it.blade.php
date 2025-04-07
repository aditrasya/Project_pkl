@extends('layout')

@section('konten')

<h4>Tambah Data Pengaduan</h4>

<form action="{{ route('pengaduan_it.submit-pengaduan_it', $pengaduan_it->id_pengaduan_it) }}" method="post">
    @csrf
    <label>Id Pengaduan It</label>
    <div name="id_pengaduan_it" id="id_pengaduan_it">{{ $pengaduan_it->id_pengaduan_it }}</div>
    <label>Nama</label>
    <div name="nama" id="nama">{{ $pengaduan_it->nama }}</div>
    <label>Bagian</label>
    <div name="bagian" id="bagian">{{ $pengaduan_it->bagian }}</div>
    <label>Pengaduan</label>
    <div name="pengaduan" id="pengaduan">{{ $pengaduan_it->pengaduan }}</div>
    <label>Update Pengaduan It</label>
    <input type="text" name="update_pengaduan_it" class="form-control mb-2" value="{{ $pengaduan_it->update_pengaduan_it }}">
    
                                                                                                                                
    <button class="btn btn-success" type="submit">Update <i class="bi bi-calendar-plus"></i></button>
</form>

@endsection