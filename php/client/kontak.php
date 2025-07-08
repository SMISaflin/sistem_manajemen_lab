<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Kontak</title>
    <link rel="stylesheet" href="../../css/kontak.css">
</head>
<body>
    <?php include "navbar.php"; ?>
    <div class="container">
        <h1>Hubungi Kami</h1>
        <form action="kontak.php" method="POST">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="pesan">Pesan:</label>
            <textarea id="pesan" name="pesan" rows="5" required></textarea>

            <button type="submit">Kirim</button>
        </form>
    </div>
</body>
</html>
