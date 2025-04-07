@extends('template')
@section('konten')
<!-- Navbar -->
<nav class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <h1 class="text-xl font-bold">Agenda Pkl Aditya Abel</h1>
                </div>
            </div>
            <div class="flex items-center">
                <button class="px-4 py-2 text-white bg-green-600 rounded">
                    <a href="{{ route('agenda.tambah') }}">tambah</a>
                </button>
            </div>
        </div>
    </div>
</nav>

<!-- Main Content -->
<div class="container mx-auto px-4 py-6">
    <h2 class="text-2xl font-semibold mb-4">Data Table</h2>
    <div class="overflow-x-auto bg-white rounded-lg shadow">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">tanggal</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">kegiatan</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">aksi</th>
                </tr>
            </thead>
            @foreach ($agenda as $item)
            <tbody class="bg-white divide-y divide-gray-200">
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $item->id_agenda }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $item->tanggal }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $item->kegiatan }}</td>
                    <td>
                        <div class="btn flex gap-3">
                            <a href="{{ route('agenda.edit', $item->id_agenda) }}" class="bg-yellow-500 text-white px-2 py-1 rounded-lg">Edit <i class="bi bi-pencil"></i></a>
                            <form action="{{ route('agenda.delete', $item->id_agenda) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="bg-red-500 text-white px-2 py-1 rounded-lg">Hapus <i class="bi bi-trash"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
        <div class="pagination">
            {{ $agenda->links('') }}
        </div>
    </div>
</div>
@endsection