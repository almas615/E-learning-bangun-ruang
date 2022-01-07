<?php 
include "../../../../lib/koneksi.php";
$idSoal = $_GET['idSoal'];
$isiJawaban = $_POST['isiJawaban'];
$isCorrect = $_POST['isCorrect']; 

$querySimpan = mysqli_query($koneksi, "INSERT INTO jawaban(soalId,isiJawaban,isCorrect) VALUES('$idSoal','$isiJawaban','$isCorrect')");
if ($querySimpan) {
    echo "<script>alert ('data jawaban berhasil masuk'); window.location='../../index.php?module=daftar_jawaban&id=".$idSoal."';</script>";
} else {
    echo "<script>alert ('data jawaban gagal dimasukan'); window.location = '../../index.php?module=daftar_jawaban&topikId=".$idSoal."';</script>";
}
?>