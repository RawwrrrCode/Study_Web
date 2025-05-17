<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home dengan Pop-up</title>
    <style>
         table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        th, td {
            padding: 20px;
            border: 2px solid #333; /* Menambah ketebalan border untuk tampilan kotak-kotak */
            text-align: center;
        }

        th {
            background-color: #4CAF50; /* Warna latar belakang header tabel */
            color: white;
        }

        td {
            background-color: #f2f2f2; /* Warna latar belakang cell */
        }

        tr:nth-child(even) td {
            background-color: #e0e0e0; /* Warna latar belakang untuk baris genap */
        }

        tr:hover td {
            background-color: #ddd; /* Warna latar belakang saat baris di-hover */
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }

        nav {
            background-color: #444;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .content {
            padding: 20px;
            text-align: center;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        /* Style untuk pop-up */
        #popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            z-index: 1000;
            pointer-events: all; /* Agar tidak bisa klik di luar pop-up */
        }

        #popup button {
            background-color: #ff5733;
            border: none;
            padding: 10px 20px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
        }

        #popup button:hover {
            background-color: #c0392b;
        }

        /* Background transparan di belakang pop-up */
        #popup-overlay {
            display: block;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }
    </style>
</head>
<body>

    <header>
        <h1>Selamat Datang <?= $pengguna ?> di Halaman Home</h1>
       

    </header>

    <nav>
        <a href="#">Beranda</a>
        <a href="#">Tentang Kami</a>
        <a href="#">Layanan</a>
        <a href="#">Kontak</a>
    </nav>

    <div class="content">
        <h2>Ini adalah halaman utama dari website kami.</h2>
       
        <p>Selamat datang! Kami senang Anda mengunjungi halaman ini.</p>
        <h1>Selamat datang, <?= $pengguna ?>!</h1>

<h2>Daftar Kota:</h2>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Kota</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($list_kota as $index => $kota): ?>
            <tr>
                <td><?= $index + 1 ?></td> <!-- Nomor urut -->
                <td><?= $kota ?></td>
            </tr>
        <?php endforeach; ?>
    </div>

    <footer>
        <p>&copy; 2025 Website Kami. Semua hak dilindungi.</p>
    </footer>

    <!-- Overlay untuk background transparan di belakang pop-up -->
    <div id="popup-overlay"></div>

    <!-- Pop-up -->
    <div id="popup">
        <h2>Terima Kasih!</h2>
        <p>Terima kasih telah mengunjungi halaman kami.</p>
        <button onclick="closePopup()">Tutup</button>
    </div>

    <script>
        // Fungsi untuk menampilkan pop-up
        window.onload = function() {
            document.getElementById('popup').style.display = 'block';
            document.getElementById('popup-overlay').style.display = 'block';
        }

        // Fungsi untuk menutup pop-up
        function closePopup() {
            document.getElementById('popup').style.display = 'none';
            document.getElementById('popup-overlay').style.display = 'none';
        }
    </script>

</body>
</html>
