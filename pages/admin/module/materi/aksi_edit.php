<?php 
include "../../../../lib/koneksi.php";

$idMateri = $_GET['id'];
// $topik = $_POST['topik'];

$judulMateri = $_POST['judulMateri'];
// $isiMateri = $_POST['isiMateri'];


$queryEdit = mysqli_query($koneksi, "UPDATE materi set judulMateri='$judulMateri' WHERE id = '$idMateri'");

if ($queryEdit) {
    echo "<script>alert('data materi berhasil diubah'); window.location = '../../index.php?module=daftar_materi&topikId=0';</script>";
} else {
    echo "<script> alert('data materi gagal diubah'); window.location = '../../index.php?module=daftar_materi&topikId=0;</script>";
}
?>