<?php
session_start();

// Cek apakah user sudah login
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

// Cek apakah level = pegawai
if ($_SESSION['level'] != "pegawai") {
    echo "Akses ditolak! Halaman ini hanya untuk Pegawai.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Pegawai</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            padding: 20px;
        }
        .container {
            background: #fff;
            padding: 25px;
            width: 650px;
            margin: auto;
            margin-top: 50px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }
        h2 {
            color: #333;
        }
        .logout-btn {
            background: #e74c3c;
            padding: 10px 20px;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .logout-btn:hover {
            background: #c0392b;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Selamat Datang, <?php echo $_SESSION['nama_lengkap']; ?> 👋</h2>
    <p>Anda login sebagai: <b><?php echo $_SESSION['level']; ?></b></p>

    <hr>

    <h3>Menu Pegawai</h3>
    <ul>
        <li><a href="#">Menu 1 Pegawai</a></li>
        <li><a href="#">Menu 2 Pegawai</a></li>
        <li><a href="#">Menu 3 Pegawai</a></li>
    </ul>

    <br>
    <a class="logout-btn" href="logout.php">Logout</a>

</div>

</body>
</html>
