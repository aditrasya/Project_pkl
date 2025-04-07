@extends('layout')

@section('konten')

<b><h4>Edit Data Pks</h4></b>

<form action="{{ route('data_pks.update', $data_pks->id_data_pks) }}" method="post">
    @csrf
    <label>Tanggal</label>
    <input type="date" name="tanggal" class="form-control mb-2" value="{{ $data_pks->tanggal }}">
    <label>Nama Perusahaan</label>
    <input type="text" name="nama_perusahaan" class="form-control mb-2" value="{{ $data_pks->nama_perusahaan }}">
    <label>Golongan</label>
    <input type="text" name="golongan" class="form-control mb-2" value="{{ $data_pks->golongan }}">
    <label>Minimum</label>
    <input type="text" name="minimum" class="form-control mb-2" value="{{ $data_pks->minimum }}">
    <label>Tarif 1</label>
    <input type="number" name="tarif_1" class="form-control mb-2" value="{{ $data_pks->tarif_1 }}">
    <label>Tarif 2</label>
    <input type="number" name="tarif_2" class="form-control mb-2" value="{{ $data_pks->tarif_2 }}">
    <label>Tarif 3</label>
    <input type="number" name="tarif_3" class="form-control mb-2" value="{{ $data_pks->tarif_3 }}">
    <label>Masa Perjanjian</label>
    <input type="text" name="masa_perjanjian" class="form-control mb-2" value="{{ $data_pks->masa_perjanjian }}">

    <button class="btn btn-primary">Edit <i class="bi bi-pencil"></i></button>
</form>

@endsection