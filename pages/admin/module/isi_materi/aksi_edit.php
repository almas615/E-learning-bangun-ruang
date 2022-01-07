<?php 
include "../../../../lib/koneksi.php";

$idIsi = $_GET['id'];
$noHalaman = $_POST['noHalaman'];
$isiHalaman = $_POST['isiHalaman'];

$query = mysqli_query($koneksi, "SELECT * FROM isi_materi where id=$idIsi");
$isi = mysqli_fetch_array($query); 

$queryEdit = mysqli_query($koneksi, "UPDATE isi_materi set noHalaman='$noHalaman',isiHalaman='$isiHalaman' WHERE id = '$idIsi'");

if ($queryEdit) {
    echo "<script>alert('data isi materi berhasil diubah'); window.location = '../../index.php?module=daftar_isi_materi&materiId=". $isi['materiId'] ."';</script>";
} else {
    echo "<script> alert('data isi materi gagal diubah'); window.location = '../../index.php?module=daftar_isi_materi&materiId=". $isi['materiId'] ."';</script>";
}
?>