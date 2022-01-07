<?php 
include "../../../../lib/koneksi.php";

$idSoal = $_GET['id'];
$materi = $_POST['materi'];
$noSoal = $_POST['noSoal'];
$isiSoal = $_POST['isiSoal'];

$queryEdit = mysqli_query($koneksi, "UPDATE soal set materiId='$materi',noSoal='$noSoal',isiSoal='$isiSoal' WHERE id = '$idSoal'");

if ($queryEdit) {
    echo "<script>alert('data soal berhasil diubah'); window.location = '../../index.php?module=daftar_soal&materiId=".$materi."';</script>";
} else {
    echo "<script> alert('data soal gagal diubah'); window.location = '../../index.php?module=daftar_soal&materiId=".$materi.";</script>";
}
?>