<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Pengguna | Sistem Manajemen Lab</title>
    <link rel="stylesheet" href="../css/pengguna.css">
</head>
<body>
    <?php include "sidebar.php"; ?>
    <div class="container">
        <header>
            <h1>Manajemen Pengguna</h1>
        </header>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pengguna</th>
                    <th>Username</th>
                    <th>Level</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Contoh data statis, seharusnya data ini diambil dari database
                $pengguna = [
                    ["nama" => "Admin Lab", "username" => "adminlab", "level" => "Admin"],
                    ["nama" => "Petugas 1", "username" => "petugas1", "level" => "Petugas"]
                ];
                $no = 1;
                foreach ($pengguna as $user) {
                    echo "<tr>
                            <td>{$no}</td>
                            <td>{$user['nama']}</td>
                            <td>{$user['username']}</td>
                            <td>{$user['level']}</td>
                            <td class='actions'>
                                <a href='edit_pengguna.php?id={$no}'><button>Edit</button></a>
                                <a href='hapus_pengguna.php?id={$no}' onclick='return confirm(\"Yakin ingin hapus?\")'><button>Hapus</button></a>
                            </td>
                          </tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
