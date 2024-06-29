<?php
// koneksi ke data base
require 'function.php';

$id = $_GET['id'];

$toko = query("SELECT * FROM datatoko WHERE id=$id")[0];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (ubah($_POST) > 0) {
        echo "
        <script> 
            alert('data berhasil diubah');
            document.location.herf = 'index.php';
        </script>";
    } else {
        echo "
        <script> 
            alert('data gagal diubah');
            document.location.herf = 'index.php';
        </script>";
    }
}
?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px 40px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }

        h1 {
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }

        .list {
            list-style: none;
            padding: 0;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #666;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button[type="submit"] {
            background-color: #fce205;
            color: black;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }

        button[type="submit"]:hover {
            background-color: #ffd500;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: black;
            text-decoration: none;
            background-color: #91e3ad;
            padding: 13px;
            border-radius: 4px;
            transition: .5s;
        }

        a:hover {
            background-color: #69f599;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Ubah Data Toko</h1>
        <form action="" method="post">
            <input type="hidden" name="id" value="<?= $toko['id']; ?>">
            <ul class="list">
                <li>
                    <label for="nama">Nama Barang</label>
                    <input type="text" name="namaBarang" id="namaBarang" value="<?= $toko['namaBarang']; ?>">
                </li>
                <li>
                    <label for="nama">Kode Barang</label>
                    <input type="text" name="kodeBarang" id="kodeBarang" value="<?= $toko['kodeBarang']; ?>">
                </li>
                <li>
                    <label for="nama">Harga Barang</label>
                    <input type="text" name="hargaBarang" id="hargaBarang" value="<?= $toko['hargaBarang']; ?>">
                </li>
                <li>
                    <label for="nama">Stok Barang</label>
                    <input type="text" name="stokBarang" id="stokBarang" value="<?= $toko['stokBarang']; ?>">
                </li>
                <li>
                    <label for="nama">Gambar</label>
                    <input type="text" name="gambar" id="gambar" value="<?= $toko['gambar']; ?>">
                </li>
                <li>
                    <button type="submit" name="submit">Edit Data</button>
                </li>
            </ul>
        </form>

        <a href="index.php">Kembali ke Halaman utama</a>
    </div>
</body>

</html>