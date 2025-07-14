<?php 
    include "koneksi.php";

    if(isset($_POST['tambah'])) {
        $barang = $_POST['barang'];
        $kategori = $_POST['kategori'];
        $jumlah = $_POST['jumlah'];
        $kondisi = $_POST['kondisi'];
        $lokasi = $_POST['lokasi'];
        $foto = $_FILES['foto']['name'];
        $tmp = $_FILES['foto']['tmp_name'];

        move_uploaded_file ($tmp, 'image /'. $foto);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="../css/tambahdata.css">
</head>
<body>
    <?php include "sidebar.php"; ?>
    <div class="container">
        <h1 class="title">Tambah Data Inventaris</h1>
        <div class="box-input">
            <form action="" method="post">
                <label for="barang">Nama Barang : </label>
                <input type="text" id="barang" name="barang" required>
                <label for="kategori">Kategori : </label>
                <input type="text" name="kategori" id="kategori" required>
                <label for="jumlah">Jumlah : </label>
                <input type="text" name="jumlah" id="jumlah">
                <label for="kondisi">Kondisi : </label>
                <input type="text" name="kondisi" id="kondisi">
                <label for="lokasi">Lokasi : </label>
                <input type="text" name="lokasi" id="lokasi">
                <label for="foto">Foto : </label>
                <input type="file" name="foto" id="foto">
                <button type="submit" name="tambah">Tambah Data</button>
            </form>
        </div>
    </div>
</body>
</html>