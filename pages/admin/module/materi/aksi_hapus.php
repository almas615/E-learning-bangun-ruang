<?php
    include "../../../../lib/koneksi.php";
    $idMateri = $_GET['id'];
    $queryHapus = mysqli_query($koneksi, "DELETE FROM materi WHERE id='$idMateri'");
    if ($queryHapus) {
        echo "<script>window.location = '../../index.php?module=daftar_materi&topikId=0';</script>";
    } else {
        echo "<script>alert ('Data materi gagal dihapus'); window.location = '../../index.php?module=daftar_materi&topikId=0'";
    }

