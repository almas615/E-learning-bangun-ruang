<?php 
include "../../../../lib/koneksi.php";

$idUser = $_GET['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];

$password = $_POST['password'];


$queryEdit = mysqli_query($koneksi, "UPDATE user set nama='$nama',username='$username',`password` = '$password'  WHERE id = '$idUser'");

if ($queryEdit) {
    echo "<script>alert('data profile berhasil diubah'); window.location = '../../index.php?module=home';</script>";
} else {
    echo "<script> alert('data profile gagal diubah'); window.location = '../../index.php?module=home;</script>";
}
?>