<?php
include "../../../../lib/koneksi.php";
$idIsi = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM isi_materi where id=$idIsi");
$isi = mysqli_fetch_array($query);

$queryHapus = mysqli_query($koneksi, "DELETE FROM isi_materi WHERE id='$idIsi'");
if ($queryHapus) {
    echo "<script>window.location = '../../index.php?module=daftar_isi_materi&materiId=". $isi['materiId'] ."';</script>";
} else {
    echo "<script>alert ('Data isi materi gagal dihapus'); window.location = '../../index.php?module=daftar_isi_materi&materiId=". $isi['materiId'] ."';</script>";
}
