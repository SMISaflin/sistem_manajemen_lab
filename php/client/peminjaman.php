<?php
include "../koneksi.php";
include "../session.php";
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

    <div class="hero">
        <h1>Halaman Peminjaman Barang</h1>
        <p>Kelola peminjaman barang laboratorium dengan mudah dan cepat.</p>
    </div>

    <div class="section">
        <p>Halo, <strong><?= $_SESSION['username']; ?></strong>. Berikut adalah daftar peminjaman Anda.</p>

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
                <?php
                $no = 1;
                $username = $_SESSION['username'];
                $query = mysqli_query($koneksi, "SELECT * FROM peminjaman ORDER BY id ASC");

                if (mysqli_num_rows($query) > 0) {
                    while ($row = mysqli_fetch_assoc($query)) {
                        echo "<tr>
                                <td>{$no}</td>
                                <td>{$row['namabarang']}</td>
                                <td>{$row['tanggalpinjam']}</td>
                                <td>{$row['tanggalkembali']}</td>
                                <td>{$row['status']}</td>
                              </tr>";
                        $no++;
                    }
                } else {
                    echo "<tr><td colspan='5'>Belum ada data peminjaman.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <div class="footer">
        &copy; <?= date("Y"); ?> Sistem Manajemen Lab. All rights reserved.
    </div>

</body>
</html>
