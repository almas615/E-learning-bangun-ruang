<?php 
include "../../../../lib/koneksi.php";
$namaAdmin = $_POST['namaAdmin'];
$username = $_POST['username'];
$password = $_POST['password'];
// $isActive = $_POST['isActive'];
$querySimpan = mysqli_query($koneksi, "INSERT INTO admin(namaAdmin,username,`password`) VALUES('$namaAdmin','$username','$password')");
if ($querySimpan) {
    echo "<script>alert ('data admin berhasil masuk'); window.location='../../index.php?module=daftar_admin';</script>";
} else {
    echo "<script>alert ('data admin gagal dimasukan'); window.location = '../../index.php?module=daftar_admin';</script>";
}
?>