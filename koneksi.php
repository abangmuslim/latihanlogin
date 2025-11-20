<?php
$server   = "localhost";
$user     = "root";
$password = "";
$database = "latihanlogin";

// Membuat koneksi
$koneksi = mysqli_connect($server, $user, $password, $database);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
