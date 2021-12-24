<?php
    include "../../../../lib/koneksi.php";
    $idMateri = $_GET['id'];
    $queryHapus = mysqli_query($koneksi, "DELETE FROM materi WHERE id='$idMateri'");
    if ($queryHapus) {
        echo "<script>alert ('Data Topik berhasil dihapus'); window.location = '../../index.php?module=daftar_topik';</script>";
    } else {
        echo "<script>alert ('Data Topik gagal dihapus'); window.location = '../../index.php?module=daftar_topik'";
    }

