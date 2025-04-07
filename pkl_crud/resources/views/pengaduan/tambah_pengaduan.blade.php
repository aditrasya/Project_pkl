@extends('layout')

@section('konten')

<h4>Tambah Data Pengaduan</h4>

<form action="{{ route('pengaduan.submit') }}" method="post">
    @csrf
    <label>Id pelanggan</label>
    <select name="id_pelanggan" id="id_pelanggan"  class="form-control mb-2">
        @foreach ($pelanggan as $data)
        <option value="{{ $data->id_pelanggan }}">{{ $data->id_pelanggan }}</option>
        @endforeach
    </select>
    <label>Keluhan</label>
    <select name="keluhan" id="keluhan"  class="form-control mb-2">
        <option value="air kecil">Air Kecil</option>
        <option value="air kotor">Air Kotor</option>
    </select>
    
                                                                                                                                
    <button class="btn btn-primary">Tambah <i class="bi bi-plus-square"></i></button>
</form>

@endsection