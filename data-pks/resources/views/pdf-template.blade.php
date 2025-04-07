<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    @vite('resources/css/app.css')
    @vite('resources/css/navbar.css')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <style>
        table {
            border-collapse: collapse;
            /* Pastikan border pada tabel rapat */
        }

        th,
        td {
            border: 1px solid #d1d5db;
            /* Menambahkan border untuk th dan td */
        }
    </style>
</head>
<body>
<h1>Data Pks</h1>
<table class="table">
    <tr>
        <th>No</th>
        <th>Tanggal</th>
        <th>Nama Perusahaan</th>
        <th>Golongan</th>
        <th>Minimum</th>
        <th>Tarif 1</th>
        <th>Tarif 2</th>
        <th>Tarif 3</th>
        <th>Masa Perjanjian</th>
    </tr>
    @foreach($data as $no=>$data)
    <tr>
        <td>{{ $no+1 }}</td>
        <td>{{ $data->tanggal }}</td>
        <td>{{ $data->nama_perusahaan }}</td>
        <td>{{ $data->golongan }}</td>
        <td>{{ $data->minimum }}</td>
        <td>{{ $data->tarif_1 }}</td>
        <td>{{ $data->tarif_2 }}</td>
        <td>{{ $data->tarif_3 }}</td>
        <td>{{ $data->masa_perjanjian }}</td>
    </tr>
    @endforeach
</table>

</body>
</html>