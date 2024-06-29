<?php
require 'function.php';
// query data mahasiswa
$datatoko = query("SELECT * FROM datatoko");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Barang</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Daftar Barang Toko</h1>
            <button class="add-button">
                <a href="tambah.php">Tambah Data</a>
            </button>
        </div>
        <div class="content">
            <table border="1" cellpadding="10" callspacing="0">
                <tr>
                    <th>No.</th>
                    <th>Aksi</th>
                    <th>Gambar</th>
                    <th>Nama Barang</th>
                    <th>Kode Barang</th>
                    <th>Harga Barang</th>
                    <th>Stok Barang</th>
                </tr>
                <?php $i = 1; ?>
                <?php foreach ($datatoko as $toko) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td>
                            <a href="ubah.php?id=<?= $toko['id'] ?>" class="u-button">Ubah</a>
                            <a href="hapus.php?id=<?= $toko['id'] ?>" onclick="return confirm('apakah yakin ingin menghapus?');" class="h-button">Hapus</a>
                        </td>
                        <td><img src="img/<?= $toko['gambar']; ?>" alt="" width="300px"></td>
                        <td><?= $toko['namaBarang']; ?></td>
                        <td><?= $toko['kodeBarang']; ?></td>
                        <td><?= $toko['hargaBarang']; ?></td>
                        <td><?= $toko['stokBarang']; ?></td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</body>

</html>