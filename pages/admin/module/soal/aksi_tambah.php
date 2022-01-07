<?php 
include "../../../../lib/koneksi.php";
$materi = $_POST['materi'];
$noSoal = $_POST['noSoal'];
$isiSoal = $_POST['isiSoal'];
$querySimpan = mysqli_query($koneksi, "INSERT INTO soal(materiId,noSoal,isiSoal) VALUES('$materi','$noSoal','$isiSoal')");
if ($querySimpan) {
    echo "<script>alert ('data soal berhasil masuk'); window.location='../../index.php?module=daftar_soal&materiId=".$materi."';</script>";
} else {
    echo "<script>alert ('data soal gagal dimasukan'); window.location = '../../index.php?module=daftar_soal&materiId=".$materi."';</script>";
}
?>