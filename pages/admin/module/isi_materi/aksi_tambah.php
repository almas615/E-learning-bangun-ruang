<?php 
include "../../../../lib/koneksi.php";
// $topik = $_POST['topik'];
$noHalaman = $_POST['noHalaman'];
$isiHalaman = $_POST['isiHalaman'];
$materiId= $_GET['materiId'];
// $isiMateri = $_POST['isiMateri'];
$querySimpan = mysqli_query($koneksi, "INSERT INTO isi_materi(materiId,noHalaman,isiHalaman) VALUES('$materiId','$noHalaman','$isiHalaman')");
if ($querySimpan) {
    echo "<script>alert ('data isi materi berhasil masuk'); window.location='../../index.php?module=daftar_isi_materi&materiId=" . $materiId . "';</script>";
} else {
    echo "<script>alert ('data isi materi gagal dimasukan'); window.location = '../../index.php?module=daftar_isi_materi&materiId=". $materiId ."';</script>";
}
?>