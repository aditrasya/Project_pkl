@extends('layout')

@section('konten')

<b><h2>Tambah Data Pks</h2></b>

<form action="{{ route('data_pks.simpan') }}" method="post">
    @csrf
    <label>Tanggal</label>
    <input type="date" name="tanggal" class="form-control mb-2">
    <label>Nama Perusahaan</label>
    <input type="text" name="nama_perusahaan" class="form-control mb-2">
    <label>Golongan</label>
    <input type="text" name="golongan" class="form-control mb-2">
    <label>Minimum</label>
    <input type="text" name="minimum" class="form-control mb-2">
    <label>Tarif 1</label>
    <input type="number" name="tarif_1" class="form-control mb-2">
    <label>Tarif 2</label>
    <input type="number" name="tarif_2" class="form-control mb-2">
    <label>Tarif 3</label>
    <input type="number" name="tarif_3" class="form-control mb-2">
    <label>Masa Perjanjian</label>
    <input type="text" name="masa_perjanjian" class="form-control mb-2">

    <button class="btn btn-primary">Tambah <i class="bi bi-plus-square"></i></button>
</form>

@endsection