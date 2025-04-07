@extends('layout')

@section('konten')

<h4>Tambah Datapelanggan</h4>

<form action="{{ route('datapelanggan.submit') }}" method="post">
    @csrf
    <label>Cabang</label>
    <select name="cabang" id="cabang"  class="form-control mb-2">
        <option value="teluk buyung">Teluk Buyung</option>
        <option value="jati asih">Jatih Asih</option>
        <option value="rawa tembaga">Rawa Tembaga</option>
        <option value="wisma asri">Wisma Asri</option>
        <option value="pondok hijau">Pondok Hijau</option>
    </select>
    <label>Nama</label>
    <input type="text" name="nama" class="form-control mb-2">
    <label>Alamat</label>
    <input type="text" name="alamat" class="form-control mb-2">
    <label>No Hp</label>
    <input type="number" name="no_hp" class="form-control mb-2">
    <label>Kel Pelanggan</label>
    <select name="kel_pelanggan" id="kel_pelanggan"  class="form-control mb-2">
        <option value="sosial">Sosial</option>
        <option value="rumah tangga">Rumah Tangga</option>
        <option value="niaga">Niaga</option>
        <option value="industri">Industri</option>
    </select>
                                                                                                                                
    <button class="btn btn-primary">Tambah <i class="bi bi-plus-square"></i></button>
</form>

@endsection