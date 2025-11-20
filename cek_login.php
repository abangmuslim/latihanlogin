<?php
session_start();
include "koneksi.php";

// Cegah error ketika halaman diakses langsung tanpa POST
if (!isset($_POST['username'], $_POST['password'], $_POST['level'])) {
    header("Location: index.php");
    exit();
}

$username = mysqli_real_escape_string($koneksi, $_POST['username']);
$password_input = $_POST['password'];
$level = mysqli_real_escape_string($koneksi, $_POST['level']);

$password = md5($password_input);

// Cek user berdasarkan username + level
$query = "SELECT * FROM tuser WHERE username='$username' AND level='$level'";
$result = mysqli_query($koneksi, $query);
$user = mysqli_fetch_array($result);

if ($user) {
    if ($password == $user['password']) {

        $_SESSION['username'] = $user['username'];
        $_SESSION['nama_lengkap'] = $user['nama_lengkap'];
        $_SESSION['level'] = $user['level'];

        // Redirect sesuai level
        if ($user['level'] == "admin") {
            header("Location: home_admin.php");
        } elseif ($user['level'] == "operator") {
            header("Location: home_operator.php");
        } elseif ($user['level'] == "pegawai") {
            header("Location: home_pegawai.php");
        } else {
            header("Location: index.php");
        }
        exit();

    } else {
        echo "Password salah!";
    }

} else {
    echo "Username atau level tidak ditemukan!";
}
?>
