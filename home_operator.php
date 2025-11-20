<?php
session_start();

// Cek apakah operator sudah login
if (!isset($_SESSION['username']) || $_SESSION['level'] != "operator") {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Operator</title>
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">

<h2>Selamat datang, <b><?= $_SESSION['nama_lengkap']; ?></b> (Operator)</h2>
<p>Anda berhasil login sebagai <b>Operator</b>.</p>

<a href="logout.php" class="btn btn-danger">Logout</a>

</body>
</html>
