<?php 
include "../../../../lib/koneksi.php";

$idUser = $_GET['id'];
$isActive = $_GET['action'];



$queryEdit = mysqli_query($koneksi, "UPDATE user set isActive = '$isActive'  WHERE id = '$idUser'");

if ($queryEdit) {
    echo "<script>window.location = '../../index.php?module=daftar_user';</script>";
} else {
    echo "<script> alert('data admin gagal diubah'); window.location = '../../index.php?module=daftar_user;</script>";
}
?>