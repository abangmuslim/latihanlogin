<?php
session_start();

// Cek apakah admin sudah login
if (!isset($_SESSION['username']) || $_SESSION['level'] != "admin") {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">

<h2>Selamat datang, <b><?= $_SESSION['nama_lengkap']; ?></b> (Admin)</h2>
<p>Anda berhasil login sebagai <b>Administrator</b>.</p>

<a href="logout.php" class="btn btn-danger">Logout</a>

</body>
</html>
