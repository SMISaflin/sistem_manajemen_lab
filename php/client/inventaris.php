<?php
// Ubah path koneksi sesuai lokasi file koneksi.php kamu
include "../koneksi.php"; 
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Inventaris Lab Komputer</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f1f4f6;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 90%;
            max-width: 900px;
            margin: 50px auto;
            background-color: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #2c3e50;
        }

        .btn {
            display: inline-block;
            padding: 8px 15px;
            background-color: #2980b9;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 15px;
        }

        .btn:hover {
            background-color: #1c5980;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px 12px;
            text-align: center;
        }

        th {
            background-color: #f0f0f0;
            color: #333;
        }

        .no-data {
            text-align: center;
            color: #888;
            font-style: italic;
        }
    </style>
</head>
<body>
    <?php include "navbar.php"; ?>
    <div class="container">
        <h2>Inventaris Lab Komputer</h2>
        <a href="beranda.php" class="btn">← Kembali ke Beranda</a>

        <table>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Jumlah</th>
                <th>Kondisi</th>
                <th>Lokasi</th>
            </tr>
            <?php
            $query = mysqli_query($koneksi, "SELECT * FROM inventaris WHERE lokasi = 'Lab Komputer'");
            $no = 1;

            if (mysqli_num_rows($query) > 0) {
                while ($data = mysqli_fetch_assoc($query)) {
                    echo "<tr>
                        <td>{$no}</td>
                        <td>{$data['nama_barang']}</td>
                        <td>{$data['kategori']}</td>
                        <td>{$data['jumlah']}</td>
                        <td>{$data['kondisi']}</td>
                        <td>{$data['lokasi']}</td>
                    </tr>";
                    $no++;
                }
            } else {
                echo "<tr><td colspan='6' class='no-data'>Tidak ada data di Lab Komputer.</td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
