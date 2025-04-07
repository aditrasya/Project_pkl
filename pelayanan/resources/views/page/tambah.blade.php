<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')

</head>
<body>
<div class="max-w-2xl mx-auto p-6 bg-white border border-gray-200 rounded-lg shadow-md">
    <h2 class="text-2xl font-semibold text-gray-700 mb-4">Tambah Data</h2>

    <form action="{{ route('input.simpan') }}" method="POST">
        @csrf
        <div class="space-y-4">
            <div>
                <label for="zona" class="block text-sm font-medium text-gray-700">Zona</label>
                <input type="text" id="zona" name="zona" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div>
                <label for="unit" class="block text-sm font-medium text-gray-700">Unit</label>
                <input type="text" id="unit" name="unit" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div>
                <label for="kode_wilayah" class="block text-sm font-medium text-gray-700">Kode Wilayah</label>
                <input type="text" id="kode_wilayah" name="kode_wilayah" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div>
                <label for="kode_blok" class="block text-sm font-medium text-gray-700">Kode Blok</label>
                <input type="text" id="kode_blok" name="kode_blok" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div>
                <label for="no_ktp" class="block text-sm font-medium text-gray-700">No. KTP</label>
                <input type="text" id="no_ktp" name="no_ktp" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div>
                <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                <input type="text" id="nama" name="nama" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div>
                <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                <textarea id="alamat" name="alamat" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
            </div>

            <div>
                <label for="kecamatan" class="block text-sm font-medium text-gray-700">Kecamatan</label>
                <input type="text" id="kecamatan" name="kecamatan" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div>
                <label for="kelurahan" class="block text-sm font-medium text-gray-700">Kelurahan</label>
                <input type="text" id="kelurahan" name="kelurahan" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div>
                <label for="rt" class="block text-sm font-medium text-gray-700">RT</label>
                <input type="text" id="rt" name="rt" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div>
                <label for="rw" class="block text-sm font-medium text-gray-700">RW</label>
                <input type="text" id="rw" name="rw" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div>
                <label for="no_hp" class="block text-sm font-medium text-gray-700">No. HP</label>
                <input type="text" id="no_hp" name="no_hp" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div>
                <label for="pekerjaan" class="block text-sm font-medium text-gray-700">Pekerjaan</label>
                <input type="text" id="pekerjaan" name="pekerjaan" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div>
                <label for="status_pekerjaan" class="block text-sm font-medium text-gray-700">Status Pekerjaan</label>
                <div class="flex space-x-4">
                    <div class="flex items-center">
                        <input type="radio" id="tetap" name="pekerjaan_status" value="tetap" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300">
                        <label for="tetap" class="ml-2 text-sm font-medium text-gray-700">Tetap</label>
                    </div>
                    <div class="flex items-center">
                        <input type="radio" id="tidak_tetap" name="pekerjaan_status" value="tidak_tetap" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300">
                        <label for="tidak_tetap" class="ml-2 text-sm font-medium text-gray-700">Tidak Tetap</label>
                    </div>
                </div>
            </div>

            <div>
                <label for="tarif" class="block text-sm font-medium text-gray-700">Tarif</label>
                <input type="number" id="tarif" name="tarif" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div>
                <label for="tanah" class="block text-sm font-medium text-gray-700">Tanah</label>
                <input type="number" id="tanah" name="tanah" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div>
                <label for="bangunan" class="block text-sm font-medium text-gray-700">Bangunan</label>
                <input type="number" id="bangunan" name="bangunan" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div>
                <label for="jalan" class="block text-sm font-medium text-gray-700">Jalan</label>
                <input type="number" id="jalan" name="jalan" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div>
                <label for="biayabp" class="block text-sm font-medium text-gray-700">BiayaBP</label>
                <input type="number" id="biayabp" name="biayabp" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div>
                <label for="bayarbp" class="block text-sm font-medium text-gray-700">BayarBP</label>
                <input type="number" id="bayarbp" name="bayarbp" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div>
                <label for="sisabp" class="block text-sm font-medium text-gray-700">SisaBp</label>
                <input type="number" id="sisabp" name="sisabp" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div>
                <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal</label>
                <input type="date" id="tanggal" name="tanggal" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div class="mt-6 flex justify-end">
                <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 text-white font-medium text-sm rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Simpan</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>


