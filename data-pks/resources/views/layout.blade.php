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

</head>

<body>

    <!-- Navbar -->
    <div>
        <nav>
            <div>
                <h1>PDAM TIRTA PATRIOT</h1>
            </div>
            <ul>
                <li>
                    <a href="data_pks">Data Pks</a>
                </li>
                <li>
                    <a href="">Logout</a>
                </li>
            </ul>
        </nav>
    </div>
    
    <div class="mt-3 container">
        @yield('konten')
    </div>
    
</body>
</html>