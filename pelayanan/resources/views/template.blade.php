<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Prima</title>
    @vite('resources/css/app.css')
    @vite('resources/css/navbar.css')
</head>
<body>
    <!-- Navbar -->
    <div>
        <nav>
            <div>
                <h1>Pelayanan Prima</h1>
            </div>
            <ul>
                <li>
                    <a href="input">Tambah</a>
                </li>
                <li>
                    <a href="/">Tampil</a>
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