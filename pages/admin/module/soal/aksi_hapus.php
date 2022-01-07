<?php
include "../../../../lib/koneksi.php";
$idSoal = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM soal where id=$idSoal");
$soal = mysqli_fetch_array($query);
$queryHapus = mysqli_query($koneksi, "DELETE FROM soal WHERE id='$idSoal'");
if ($queryHapus) {
    echo "<script> window.location = '../../index.php?module=daftar_soal&materiId=".$soal['materiId']."';</script>";
} else {
    echo "<script>alert ('Data soal gagal dihapus'); window.location = '../../index.php?module=daftar_soal&materiId=".$soal['materiId']."';</script>";
}
