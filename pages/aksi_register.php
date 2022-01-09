<?php 
include "../lib/koneksi.php";
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$cekUser = mysqli_num_rows(mysqli_query($koneksi, "SELECT username FROM admin where username = '$username'"));
if ($cekUser>0) {
    echo "<script>alert ('data user gagal dimasukan, username anda mungkin telah terdaftar'); window.location = 'register.php';</script>";
} else{

    $querySimpan = mysqli_query($koneksi, "INSERT INTO user(nama,username,`password`) VALUES('$nama','$username','$password')");
    if ($querySimpan) {
        echo "<script>alert ('data user berhasil masuk'); window.location='login.php';</script>";
    } else {
        echo "<script>alert ('data user gagal dimasukan, username anda mungkin telah terdaftar'); window.location = 'register.php';</script>";
    }
}
?>