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

    $upload_path = '../image/' . $foto;
    move_uploaded_file($tmp, $upload_path);

    $sql = mysqli_query($koneksi, "INSERT INTO inventaris (barang, kategori, jumlah, kondisi, lokasi, foto) VALUES ('$barang','$kategori','$jumlah','$kondisi','$lokasi','$foto')");

    if($sql) {
        echo "<script>alert('Data Berhasil Ditambahkan!!'); window.location.href='inventaris.php';</script>";
    } else {
        echo "<script>alert('Gagal menambahkan data.');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
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
            <form action="" method="post" enctype="multipart/form-data">
                <label for="barang">Nama Barang:</label>
                <input type="text" id="barang" name="barang" required>

                <label for="kategori">Kategori:</label>
                <input type="text" name="kategori" id="kategori" required>

                <label for="jumlah">Jumlah:</label>
                <input type="text" name="jumlah" id="jumlah" required>

                <label for="kondisi">Kondisi:</label>
                <input type="text" name="kondisi" id="kondisi" required>

                <label for="lokasi">Lokasi:</label>
                <input type="text" name="lokasi" id="lokasi" required>

                <label for="foto">Foto:</label>
                <input type="file" name="foto" id="foto" accept="image/*" required>

                <button type="submit" name="tambah">Tambah Data</button>
            </form>
        </div>
    </div>
</body>
</html>
