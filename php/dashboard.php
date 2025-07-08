<?php
    include "koneksi.php";
    include "session.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD | SISTEM MANAGEMENT LAB</title>
    <link rel="stylesheet" href="../css/dashboard.css">
</head>
<body>
   <?php include "sidebar.php"; ?>
    <div class="container">
        <header>
            <h1>Selamat Datang di Website Sistem Management Lab</h1>
        </header>
        <div class="cards-container">
            <div class="cards">
                <div class="card">
                    <h2>Jumlah Peminjam</h2> 
                    <p>2 orang</p>
                </div>
                <div class="card">
                    <h2>Pengguna Lab</h2> 
                    <p>2 kelas</p>
                </div>
                <div class="card">
                    <h2>Jumlah Kategori Barang</h2> 
                    <p>2 jenis barang</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>