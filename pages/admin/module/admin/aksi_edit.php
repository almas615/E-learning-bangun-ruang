<?php 
include "../../../../lib/koneksi.php";

$idAdmin = $_GET['id'];
$namaAdmin = $_POST['namaAdmin'];
$username = $_POST['username'];

$isActive = $_POST['isActive'];


$queryEdit = mysqli_query($koneksi, "UPDATE admin set namaAdmin='$namaAdmin',username='$username',isActive = '$isActive'  WHERE id = '$idAdmin'");

if ($queryEdit) {
    echo "<script>alert('data admin berhasil diubah'); window.location = '../../index.php?module=daftar_admin';</script>";
} else {
    echo "<script> alert('data admin gagal diubah'); window.location = '../../index.php?module=daftar_admin;</script>";
}
?>