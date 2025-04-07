@extends('layout')

@section('konten')

<h4>Edit Datapelanggan</h4>

<form action="{{ route('pengaduan.update', $pengaduan->id_pengaduan) }}" method="post">
    @csrf
    <label>Keluhan</label>
    <select name="keluhan" id="keluhan"  class="form-control mb-2">
        <option value="air kecil">Air Kecil</option>
        <option value="air kotor">Air Kotor</option>
    </select>
    <label>Pegawai</label>
    <select name="pegawai" id="pegawai"  class="form-control mb-2">
        <option value="samsul">Samsul</option>
        <option value="didin">Didin</option>
    </select>
    <label>Update Keluhan</label>
    <input type="text" name="update_keluhan" value="" class="form-control mb-2">

    <button class="btn btn-primary">Edit <i class="bi bi-pencil"></i></button>
</form>

@endsection