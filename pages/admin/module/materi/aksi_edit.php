<?php 
include "../../../../lib/koneksi.php";

$idMateri = $_GET['id'];
$topik = $_POST['topik'];
$noMateri = $_POST['noMateri'];
$judulMateri = $_POST['judulMateri'];
$isiMateri = $_POST['isiMateri'];


$queryEdit = mysqli_query($koneksi, "UPDATE materi set topikId='$topik',noMateri='$noMateri',judulMateri='$judulMateri',isiMateri='$isiMateri' WHERE id = '$idMateri'");

if ($queryEdit) {
    echo "<script>alert('data materi berhasil diubah'); window.location = '../../index.php?module=daftar_materi&topikId=0';</script>";
} else {
    echo "<script> alert('data materi gagal diubah'); window.location = '../../index.php?module=daftar_materi&topikId=0;</script>";
}
?>