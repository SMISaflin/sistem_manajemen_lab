<?php
    include "koneksi.php";
    $no = 1;
    $query = mysqli_query($koneksi, "SELECT * FROM inventaris ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventaris | Sistem Management Lab</title>
    <link rel="stylesheet" href="../css/inventaris.css">
</head>
<body>
    <?php include "sidebar.php"; ?>
    <div class="container">
        <header>
            <h1>Daftar Inventaris Laboratorium</h1>
        </header>
        <a href="tambahinventaris.php" class="add-btn"> + Tambah Data</a>
        <div class="inventaris-container">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Kategori</th>
                        <th>Jumlah</th>
                        <th>Kondisi</th>
                        <th>Lokasi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($data = mysqli_fetch_array($query)) { ?>
                    <tr>
                        <td><?= $no++ ; ?></td>
                        <td><?= $data['barang']; ?></td>
                        <td><?= $data['kategori']; ?></td>
                        <td><?= $data['jumlah']; ?></td>
                        <td><?= $data['kondisi']; ?></td>
                        <td><?= $data['lokasi']; ?></td>
                        <td>
                            <button class="edit">Edit</button>
                            <button class="delete">Hapus</button>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
