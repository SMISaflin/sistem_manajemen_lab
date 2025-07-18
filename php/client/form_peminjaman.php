<?php
    include "../koneksi.php";

    $sql = mysqli_query($koneksi, "SELECT * FROM inventaris ORDER BY id DESC");

    $barang_data = [];
    while ($data = mysqli_fetch_array($sql)) {
        $barang_data[] = $data;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Peminjaman</title>
    <link rel="stylesheet" href="../../css/tambahpeminjam.css">
</head>
<body>
    <?php include "navbar.php"; ?>
    <div class="container">
        <h1>Tambah Data Peminjam</h1>
        <form action="simpan_data.php" method="post">
            <label for="namapeminjam">Nama Peminjam :</label>
            <input type="text" name="namapeminjam" id="namapeminjam" required>

            <label for="namabarang">Nama Barang :</label>
            <select name="namabarang" id="namabarang" onchange="tampilkanGambar()" required>
                <option value="">-- Pilih Barang --</option>
                <?php foreach ($barang_data as $barang): ?>
                    <option value="<?= htmlspecialchars($barang['barang']) ?>"
                        data-gambar="<?= htmlspecialchars($barang['foto']) ?>">
                        <?= htmlspecialchars($barang['barang']) ?>
                    </option>
                <?php endforeach; ?>
            </select>

            <img id="preview-gambar" src="" alt="Preview Barang">

            <label for="jumlah">Jumlah :</label>
            <input type="text" name="jumlah" id="jumlah" required>

            <label for="tanggalpinjam">Tanggal Pinjam :</label>
            <input type="date" name="tanggalpinjam" id="tanggalpinjam" required>

            <button type="submit" name="tambah">Tambah Peminjam</button>
        </form>
    </div>

    <script>
        function tampilkanGambar() {
            const select = document.getElementById('namabarang');
            const gambarPath = select.options[select.selectedIndex].getAttribute('data-gambar');
            const imgPreview = document.getElementById('preview-gambar');

            if (gambarPath) {
                imgPreview.src = "../../image/" + gambarPath;
                imgPreview.style.display = "block";
            } else {
                imgPreview.style.display = "none";
            }
        }
    </script>
</body>
</html>
