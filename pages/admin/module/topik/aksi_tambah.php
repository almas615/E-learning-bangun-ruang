<?php 
include "../../../../lib/koneksi.php";
$namaTopik = $_POST['namaTopik'];
$deskripsi = $_POST['deskripsi'];
$querySimpan = mysqli_query($koneksi, "INSERT INTO topik(namaTopik,deskripsi) VALUES('$namaTopik','$deskripsi')");
if ($querySimpan) {
    echo "<script>alert ('data topik berhasil masuk'); window.location='../../index.php?module=daftar_topik';</script>";
} else {
    echo "<script>alert ('data topik gagal dimasukan'); window.location = '../../index.php?module=daftar_topik';</script>";
}
?>