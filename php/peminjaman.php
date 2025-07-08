<?php 
    include "koneksi.php";
    include "session.php";
    $no = 1;
    $query = mysqli_query($koneksi,"SELECT * FROM peminjaman ORDER BY id ASC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Peminjaman | Sistem Manajemen Lab</title>
    <link rel="stylesheet" href="../css/peminjaman.css">
</head>
<body>
    <?php include "sidebar.php"; ?>
    <div class="container">
        <header>
            <h1>Data Peminjaman Barang</h1>
        </header>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Peminjam</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($data = mysqli_fetch_array($query)) { ?>
                <tr>
                    <td><?= $no++ ; ?></td>
                    <td><?= $data['namapeminjam']; ?></td>
                    <td><?= $data['namabarang']; ?></td>
                    <td><?= $data['jumlah']; ?></td>
                    <td><?= $data['tanggalpinjam']; ?></td>
                    <td><?= $data['tanggalkembali']; ?></td>
                    <td><?= $data['status']; ?></td>
                    <td class='actions'>
                        <a href='edit_peminjaman.php?id={$no}'><button>Edit</button></a>
                        <a href='hapus_peminjaman.php?id={$no}' onclick='return confirm(\"Yakin ingin hapus?\")'><button>Hapus</button></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
