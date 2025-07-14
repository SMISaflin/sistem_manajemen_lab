<?php
session_start();
include "koneksi.php";

$pesaneror = "";
$alertScript = "";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_array($result);

        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['role'] = $row['role'];

            $redirectPage = "dashboard.php";
            if ($row['role'] === 'admin') {
                $redirectPage = "dashboard.php";
            } else {
                $redirectPage = "client/beranda.php";
            }

            $alertScript = '
                <script>
                    Swal.fire({
                        icon: "success",
                        title: "Login Berhasil!",
                        text: "Selamat datang ' . $row['email'] . '",
                        timer: 2000,
                        showConfirmButton: false
                    }).then(() => {
                        window.location.href = "' . $redirectPage . '";
                    });
                </script>
            ';
        } else {
            $pesaneror = "Password salah!";
        }
    } else {
        $pesaneror = "Username tidak ditemukan!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Lab Management</title>
    <link rel="stylesheet" href="../css/login.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div class="login-container">
        <h2>Login Lab Management</h2>
        <form action="" method="post">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required placeholder="Masukkan Username">

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required placeholder="Masukkan Password">

            <button type="submit" name="login">Login</button>
        </form>
        <div class="footer">
            Belum punya akun? <a href="regis.php">Daftar di sini</a>
        </div>
    </div>

    <?php if (!empty($pesaneror)) : ?>
    <script>
        Swal.fire({
            icon: "error",
            title: "Login Gagal!",
            text: <?= json_encode($pesaneror) ?>
        });
    </script>
    <?php elseif (!empty($alertScript)) : ?>
        <?= $alertScript ?>
    <?php endif; ?>
</body>
</html>