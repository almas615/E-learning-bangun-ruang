<?php
session_start();
include "../lib/koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi, "SELECT * FROM user where username = '$username' AND password = '$password' AND isActive = '1'");
$ketemu = mysqli_num_rows($login);
$r = mysqli_fetch_array($login);

if ($ketemu > 0) {
    $_SESSION['userLogin'] = $r['id'];
    $_SESSION['nama'] = $r['nama'];
    $_SESSION['hak_akses'] = 'user';
    header('location:user/?module=daftar_materi');
} else {
    $login2 = mysqli_query($koneksi, "SELECT * FROM admin where username = '$username' AND password = '$password' AND isActive = '1'");
    $ketemu2 = mysqli_num_rows($login2);
    $r2 = mysqli_fetch_array($login2);

    if ($ketemu2 > 0) {
        $_SESSION['userLogin'] = $r2['id'];
        $_SESSION['nama'] = $r2['namaAdmin'];
        $_SESSION['hak_akses'] = 'admin';
        header('location:admin/?module=home');
    } else {
        echo "<script>alert ('login gagal, silahkan cek kembali username dan passwor serta pastikan bahwa akun anda telah aktif'); window.location = 'login.php';</script>";
    }
}
