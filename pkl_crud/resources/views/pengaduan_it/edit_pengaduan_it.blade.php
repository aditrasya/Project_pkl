@extends('layout')

@section('konten')

<h4>Tambah Data Pengaduan</h4>

<form action="{{ route('pengaduan_it.update', $pengaduan_it->id_pengaduan_it) }}" method="post">
    @csrf
    <label>Id Pengaduan It</label>
    <div name="id_pengaduan_it" id="id_pengaduan_it">{{ $pengaduan_it->id_pengaduan_it }}</div>
    <label>Nama</label>
    <input type="text" name="nama" class="form-control mb-2" value="{{ $pengaduan_it->nama }}">
    <label>Bagian</label>
    <select name="bagian" id="bagian"  class="form-control mb-2">
        <option value="">-----Pilih Bagian-----</option>
        <option value="Spi"
            @if ($pengaduan_it->bagian == 'Spi') 
                selected
            @endif>
            Spi
        </option>
        <option value="Sdm"
            @if ($pengaduan_it->bagian == 'Sdm') 
                selected
            @endif>
            Sdm
        </option>
        <option value="Distribusi"
            @if ($pengaduan_it->bagian == 'Distribusi') 
                selected
            @endif>
            Distribusi
        </option>
        <option value="produksi"
            @if ($pengaduan_it->bagian == 'produksi') 
                selected
            @endif>
            produksi
        </option>
    </select>
    <label>Pengaduan</label>
    <input type="text" name="pengaduan" class="form-control mb-2" value="{{ $pengaduan_it->pengaduan }}">
    
                                                                                                                                
    <button class="btn btn-primary">Edit <i class="bi bi-pencil"></i></button>
</form>

@endsection