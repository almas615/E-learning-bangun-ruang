<?php 
include "../../../../lib/koneksi.php";
// $topik = $_POST['topik'];
$noMateri = $_POST['noMateri'];
$judulMateri = $_POST['judulMateri'];
// $isiMateri = $_POST['isiMateri'];
$querySimpan = mysqli_query($koneksi, "INSERT INTO materi(noMateri,judulMateri) VALUES('$noMateri','$judulMateri')");
if ($querySimpan) {
    echo "<script>alert ('data materi berhasil masuk'); window.location='../../index.php?module=daftar_materi&topikId=0';</script>";
} else {
    echo "<script>alert ('data materi gagal dimasukan'); window.location = '../../index.php?module=daftar_materi&topikId=0';</script>";
}
?>