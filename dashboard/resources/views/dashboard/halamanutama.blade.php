@extends('template.layout')
@section('konten')

<body>
    <!-- Navbar -->
    <nav>
        <div>
            <h1>Jual Prabotan</h1>
        </div>
        <ul>
            <li>
                <a href="datamenu.html">Data Prabot</a>
            </li>
            <li>
                <a href="datapesanan.html">Data Pesanan</a>
            </li>
            <li>
                <a href="transaksi.html">Transaksi</a>
            </li>
            <li>
                <a href="laporan.html">Laporan</a>
            </li>
            <li>
                <a href="login.html">Logout</a>
            </li>
        </ul>
    </nav>

    <!-- Isi dari data menu ketiga -->
    <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table id="menu-table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nama Prabotan</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="menu-tbody">
                            <tr>
                                <td>1</td>
                                <td>Rendang</td>
                                <td>20.000</td>
                                <td>40</td>
                                <td>
                                    <a href="edit_menu.html"><button class="buton1">edit</button></a>
                                    <button class="buton3">hapus</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Sate</td>
                                <td>20.000</td>
                                <td>40</td>
                                <td>
                                    <a href="edit_menu.html"><button class="buton1">edit</button></a>
                                    <button class="buton3">hapus</button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Ayam</td>
                                <td>20.000</td>
                                <td>40</td>
                                <td>
                                    <a href="edit_menu.html"><button class="buton1">edit</button></a>
                                    <button class="buton3">hapus</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="main-tambah">
                        <button id="show-form-button">Tambah Item</button>
                    </div>
                    <div id="add-item-form" style="display: none;">
                        <h2>Tambah Menu</h2>
                        <form id="item-form">
                            <label for="item-id">Id:</label>
                            <input type="number" id="item-id" required><br>
                            <label for="item-name">Nama Makanan:</label>
                            <input type="text" id="item-name" required><br>
                            <label for="item-price">Harga:</label>
                            <input type="text" id="item-price" required><br>
                            <label for="item-stock">Stok:</label>
                            <input type="number" id="item-stock" required><br>
                            <button type="submit">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    <script src="datamenu.js"></script>
</body>
@endsection