<?php
include "../koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Landing Peminjaman | Sistem Manajemen Lab</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            margin: 0;
            background-color: #f0f4f8;
        }

        .hero {
            background-color: #0f766e;
            color: white;
            padding: 60px 20px;
            text-align: center;
        }

        .hero h1 {
            margin: 0;
            font-size: 40px;
        }

        .hero p {
            margin-top: 10px;
            font-size: 18px;
        }

        .section {
            max-width: 1000px;
            margin: 40px auto;
            padding: 20px;
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }

        .btn-tambah {
            display: inline-block;
            margin-bottom: 20px;
            padding: 12px 20px;
            background-color: #10b981;
            color: white;
            border: none;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .btn-tambah:hover {
            background-color: #059669;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            padding: 12px;
            border-bottom: 1px solid #e2e8f0;
            text-align: left;
        }

        th {
            background-color: #f1f5f9;
        }

        tr:nth-child(even) {
            background-color: #f9fafb;
        }

        .footer {
            text-align: center;
            margin: 60px 0 20px;
            color: #64748b;
            font-size: 14px;
        }
    </style>
</head>
<body>
        <?php include "navbar.php"; ?>
    <div class="hero">
        <h1>Halaman Peminjaman Barang</h1>
        <p>Kelola peminjaman barang laboratorium dengan mudah dan cepat.</p>
    </div>

    <div class="section">
        <p>Halo, Anak Kucai</strong>. Berikut adalah daftar peminjaman Anda.</p>

        <a class="btn-tambah" href="form_peminjaman.php">+ Tambah Peminjaman</a>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

    <div class="footer">
        &copy; 2025 Sistem Manajemen Lab. All rights reserved.
    </div>

</body>
</html>
