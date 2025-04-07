@extends('template')
@section('konten')
<table class="w-full bg-white border border-gray-200 shadow-md rounded-lg overflow-hidden">
    <thead>
        <tr class="bg-gray-100 text-left text-sm font-semibold text-gray-700">
            <th class="px-4 py-2">Norek</th>
            <th class="px-4 py-2">Tanggal</th>
            <th class="px-4 py-2">Nopel</th>
            <th class="px-4 py-2">NoKTP</th>
            <th class="px-4 py-2">Nama</th>
            <th class="px-4 py-2">Alamat</th>
            <th class="px-4 py-2">NoHP</th>
            <th class="px-4 py-2">Tarif</th>
            <th class="px-4 py-2">BiayaBP</th>
            <th class="px-4 py-2">BayarBP</th>
            <th class="px-4 py-2">SisaBP</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $row)
        <tr class="border-b">
            <td class="px-4 py-2">{{ $row->id_input }}</td>
            <td class="px-4 py-2">{{ $row->tanggal }}</td>
            <td class="px-4 py-2">{{ $row->id_input }}</td>
            <td class="px-4 py-2">{{ $row->no_ktp }}</td>
            <td class="px-4 py-2">{{ $row->nama }}</td>
            <td class="px-4 py-2">{{ $row->alamat }} BLOK {{ $row->kode_blok }}, {{ $row->kode_wilayah }} ,kecamatan {{ $row->kecamatan }}, kelurahan {{ $row->kelurahan }} RT/{{ $row->rt }}/RW{{ $row->rw }}</td>
            <td class="px-4 py-2">{{ $row->no_hp }}</td>
            <td class="px-4 py-2">{{ $row->tarif }}</td>
            <td class="px-4 py-2">{{ $row->biayabp }}</td>
            <td class="px-4 py-2">{{ $row->bayarbp }}</td>
            <td class="px-4 py-2">{{ $row->sisabp }}</td>
            <!-- <td class="px-4 py-2">{{ $row->bp }}</td> -->
        </tr>
        @endforeach
    </tbody>
    <div class="pagination">
        {{ $data->links('') }}
    </div>
</table>
<div class="pagination">
    {{ $data->links('') }}
</div>
<div class="flex items-end">
    <form action="{{ route('tampil') }}" class="m-5 flex items-center space-x-4">
        <label for="tanggal" class="text-lg font-medium">Pilih Tanggal:</label>
        <input type="date" id="start_date" name="start_date" class="p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
        <label for="tanggal" class="text-lg font-medium">s/d:</label>
        <input type="date" id="end_date" name="end_date" class="p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
        <button type="submit" class="p-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none">Filter</button>
    </form>
</div>
@endsection