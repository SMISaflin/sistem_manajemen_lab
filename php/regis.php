<?php
include "koneksi.php";

$pesan = "";
$alert = "";

if(isset($_POST['regis'])){
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $cek = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");
    if(mysqli_num_rows($cek) > 0){
        $pesan = "USERNAME SUDAH DIGUNAKAN!";
        $alert = "error";
    } else {
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO user (email, username, password, role) VALUES ('$email','$username','$passwordHash', 'client')";
        $insert = mysqli_query($koneksi, $query);

        if($insert){
            $pesan = "REGISTRASI BERHASIL! SELAMAT DATANG.";
            $alert = "success";
        } else {
            $pesan = "REGISTRASI GAGAL: " . mysqli_error($koneksi);
            $alert = "error";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi - Sistem Management Laboratorium</title>
    <link rel="stylesheet" href="../css/regis.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div class="form-container">
        <h2>Form Registrasi</h2>
        <form action="" method="POST">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" name="regis">Daftar</button>
        </form>
        <div class="footer">
            Sudah punya akun? <a href="login.php">Silahkan Login</a>
        </div>
    </div>

    <?php if(!empty($pesan)) : ?>
        <script>
            Swal.fire({
                icon: '<?= $alert ?>',
                title: '<?= $alert == "success" ? "Berhasil" : "Gagal" ?>',
                text: '<?= $pesan ?>'
            });
        </script>
    <?php endif; ?>
</body>
</html>
