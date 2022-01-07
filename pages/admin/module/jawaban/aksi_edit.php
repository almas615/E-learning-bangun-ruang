<?php 
include "../../../../lib/koneksi.php";

$idJawaban = $_GET['idJawaban'];
$isiJawaban = $_POST['isiJawaban'];
$isCorrect = $_POST['isCorrect'];

$query = mysqli_query($koneksi, "SELECT * FROM jawaban where id=$idJawaban");
$jawaban = mysqli_fetch_array($query); 

$queryEdit = mysqli_query($koneksi, "UPDATE jawaban set isiJawaban='$isiJawaban',isCorrect='$isCorrect' WHERE id = '$idJawaban'");

if ($queryEdit) {
    echo "<script>alert('data jawaban berhasil diubah'); window.location = '../../index.php?module=daftar_jawaban&id=".$jawaban['soalId']."';</script>";
} else {
    echo "<script> alert('data jawaban gagal diubah'); window.location = '../../index.php?module=daftar_jawaban&id=".$jawaban['soalId'].";</script>";
}
?>