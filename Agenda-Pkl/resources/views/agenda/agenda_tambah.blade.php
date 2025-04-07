@extends('template')

@section('konten')

<div class="max-w-md mx-auto mt-10 bg-white rounded-lg shadow-lg p-6">
    <h4 class="text-2xl font-semibold mb-6">Tambah Data Pelanggan</h4>

    <form action="{{ route('agenda.simpan') }}" method="post">
        @csrf

        <div class="mb-4">
            <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal</label>
            <input type="date" name="tanggal" id="tanggal" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200" required>
        </div>

        <div class="mb-4">
            <label for="kegiatan" class="block text-sm font-medium text-gray-700">Kegiatan</label>
            <input type="text" name="kegiatan" id="kegiatan" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200" required>
        </div>

        <button type="submit" class="w-full px-4 py-2 text-white bg-blue-600 rounded hover:bg-blue-700 flex items-center justify-center">
            Tambah <i class="bi bi-plus-square ml-2"></i>
        </button>
    </form>
</div>

@endsection
