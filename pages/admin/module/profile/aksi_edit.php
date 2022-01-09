<?php 
include "../../../../lib/koneksi.php";

$idAdmin = $_GET['id'];
$namaAdmin = $_POST['namaAdmin'];
$username = $_POST['username'];

$password = $_POST['password'];


$queryEdit = mysqli_query($koneksi, "UPDATE admin set namaAdmin='$namaAdmin',username='$username',`password` = '$password'  WHERE id = '$idAdmin'");

if ($queryEdit) {
    echo "<script>alert('data profile berhasil diubah'); window.location = '../../index.php?module=home';</script>";
} else {
    echo "<script> alert('data profile gagal diubah'); window.location = '../../index.php?module=home;</script>";
}
?>