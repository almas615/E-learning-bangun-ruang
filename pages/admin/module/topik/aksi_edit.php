<?php 
include "../../../../lib/koneksi.php";

$idTopik = $_GET['id'];
$namaTopik = $_POST['namaTopik'];
$deskripsi = $_POST['deskripsi'];


$queryEdit = mysqli_query($koneksi, "UPDATE topik set namaTopik='$namaTopik',deskripsi='$deskripsi' WHERE id = '$idTopik'");

if ($queryEdit) {
    echo "<script>alert('data Topik berhasil diubah'); window.location = '../../index.php?module=daftar_topik';</script>";
} else {
    echo "<script> alert('data Topik gagal diubah'); window.location = '../../index.php?module=daftar_topik;</script>";
}
?>