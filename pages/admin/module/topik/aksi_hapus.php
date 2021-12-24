<?php
    include "../../../../lib/koneksi.php";
    $idTopik = $_GET['id'];
    $queryHapus = mysqli_query($koneksi, "DELETE FROM topik WHERE id='$idTopik'");
    if ($queryHapus) {
        echo "<script>alert ('Data Topik berhasil dihapus'); window.location = '../../index.php?module=daftar_topik';</script>";
    } else {
        echo "<script>alert ('Data Topik gagal dihapus'); window.location = '../../index.php?module=daftar_topik'";
    }

