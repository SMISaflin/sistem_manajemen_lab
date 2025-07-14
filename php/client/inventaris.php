<?php
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
            max-width: 1200px;
            margin: 50px auto;
        }

        h2 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 30px;
        }

        .btn {
            display: inline-block;
            padding: 8px 15px;
            background-color: #2980b9;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 25px;
        }

        .btn:hover {
            background-color: #1c5980;
        }

        .card-container {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 20px;
        }

        .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
            padding: 20px;
            transition: transform 0.2s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card h3 {
            margin-top: 0;
            color: #34495e;
        }

        .card p {
            margin: 5px 0;
            color: #555;
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

        <div class="card-container">
        <?php
        $query = mysqli_query($koneksi, "SELECT * FROM inventaris");
        $no = 1;

        if (mysqli_num_rows($query) > 0) {
            while ($data = mysqli_fetch_assoc($query)) {
                echo "
                <div class='card'>
                    <h3>{$no}. {$data['barang']}</h3>
                    <p><strong>Kategori:</strong> {$data['kategori']}</p>
                    <p><strong>Jumlah:</strong> {$data['jumlah']}</p>
                    <p><strong>Kondisi:</strong> {$data['kondisi']}</p>
                    <p><strong>Lokasi:</strong> {$data['lokasi']}</p>
                </div>";
                $no++;
            }
        } else {
            echo "<p class='no-data'>Tidak ada data di Lab Komputer.</p>";
        }
        ?>
        </div>
    </div>
</body>
</html>
