@extends('layout')

@section('konten')

<h4>Tambah Data Pengaduan</h4>

<form action="{{ route('pengaduan_it.submit') }}" method="post">
    @csrf
    <label>Nama</label>
    <input type="text" name="nama" class="form-control mb-2">
    <label>Bagian</label>
    <select name="bagian" id="bagian"  class="form-control mb-2">
        <option value="">-----Pilih Bagian-----</option>
        <option value="spi">Spi</option>
        <option value="sdm">Sdm</option>
        <option value="distribusi">Distribusi</option>
        <option value="produksi">Produksi</option>
    </select>
    <label>Pengaduan</label>
    <input type="text" name="pengaduan" class="form-control mb-2">
    
                                                                                                                                
    <button class="btn btn-primary">Tambah <i class="bi bi-plus-square"></i></button>
</form>

@endsection