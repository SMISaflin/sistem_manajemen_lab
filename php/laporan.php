<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan | Sistem Management Lab</title>
    <link rel="stylesheet" href="../css/laporan.css"> <!-- CSS terpisah -->
</head>
<body>
    <?php include "sidebar.php"; ?>
    <div class="container">
        <header>
            <h1>Laporan Sistem Management Lab</h1>
        </header>

        <section>
            <h2>Data Peminjam</h2>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Peminjam</th>
                        <th>Tanggal Pinjam</th>
                        <th>Barang</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Ani</td>
                        <td>2025-06-20</td>
                        <td>Proyektor</td>
                        <td>Dikembalikan</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Budi</td>
                        <td>2025-06-18</td>
                        <td>Laptop</td>
                        <td>Belum Kembali</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section>
            <h2>Penggunaan Lab</h2>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kelas</th>
                        <th>Hari</th>
                        <th>Jam</th>
                        <th>Mata Kuliah</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>TI-2A</td>
                        <td>Senin</td>
                        <td>08.00 - 10.00</td>
                        <td>Pemrograman Web</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>TI-2B</td>
                        <td>Selasa</td>
                        <td>10.00 - 12.00</td>
                        <td>Basis Data</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section>
            <h2>Kategori Barang</h2>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kategori</th>
                        <th>Jumlah Barang</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Elektronik</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Perangkat Keras</td>
                        <td>5</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>
</body>
</html>
