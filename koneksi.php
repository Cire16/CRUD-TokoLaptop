<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "toko";

$conn = new mysqli($server, $username, $password, $dbname);

if ($conn->connect_error) {
   die("koneksi gagal: " . $conn->connect_error);
}
echo "Koneksi berhasil";

$conn->close();
