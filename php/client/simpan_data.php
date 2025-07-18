<?php
include "../koneksi.php";

if(isset($_POST['tambah'])) {
    $namapeminjam = $_POST['namapeminjam'];
    $namabarang = $_POST['namabarang'];
    $jumlah = $_POST['jumlah'];
    $tanggalpinjam = $_POST['tanggalpinjam'];

    $sql = mysqli_query($koneksi, "INSERT INTO peminjaman (namapeminjam, namabarang, jumlah, tanggalpinjam) VALUES ('$namapeminjam','$namabarang', '$jumlah', '$tanggalpinjam')");

    if($sql) {
        echo "<script>alert('Data Berhasil Ditambahkan!!'); window.location.href='peminjaman.php';</script>";
    } else {
        echo "<script>alert('Gagal menambahkan data.');</script>";
    }
}
?>
