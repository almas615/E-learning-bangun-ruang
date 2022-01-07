<?php
    include "../../../../lib/koneksi.php";
    $idJawaban = $_GET['id'];
    $query = mysqli_query($koneksi, "SELECT * FROM jawaban where id=$idJawaban");
$jawaban = mysqli_fetch_array($query); 
    $queryHapus = mysqli_query($koneksi, "DELETE FROM jawaban WHERE id='$idJawaban'");
    if ($queryHapus) {
        echo "<script> window.location = '../../index.php?module=daftar_jawaban&id=".$jawaban['soalId']."';</script>";
    } else {
        echo "<script>alert ('Data jawaban gagal dihapus'); window.location = '../../index.php?module=daftar_jawaban&id=".$jawaban['soalId']."';</script>";
    }

