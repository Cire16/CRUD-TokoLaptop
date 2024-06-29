<?php

$conn = mysqli_connect("localhost", "root", "", "toko");


function query($query)
{
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];
    // item yang di ambil
    // $row adalah item yang di ambil
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function tambah($data)
{
    global $conn;

    // if(isset($_POST['submit'])) {
    $barang = htmlspecialchars($data['namaBarang']);
    $kode = htmlspecialchars($data['kodeBarang']);
    $harga = htmlspecialchars($data['hargaBarang']);
    $stok = htmlspecialchars($data['stokBarang']);
    $gambar = htmlspecialchars($data['gambar']);


    $query = "INSERT INTO datatoko VALUES ('','$barang','$kode','$harga','$stok','$gambar')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM datatoko WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;
    $id = $data['id'];
    $barang = htmlspecialchars($data['namaBarang']);
    $kode = htmlspecialchars($data['kodeBarang']);
    $harga = htmlspecialchars($data['hargaBarang']);
    $stok = htmlspecialchars($data['stokBarang']);
    $gambar = htmlspecialchars($data['gambar']);

    $query = "UPDATE datatoko SET namaBarang = '$barang', 
        kodeBarang = '$kode', 
        hargaBarang = '$harga', 
        stokBarang ='$stok', 
        gambar = '$gambar'
        WHERE id = $id";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
