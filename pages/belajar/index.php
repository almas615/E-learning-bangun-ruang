<?php
include "../../lib/koneksi.php";
session_start();
$halamanSekarang = $_GET['noHalaman'];

$totalHalaman = mysqli_fetch_array(mysqli_query($koneksi, "SELECT count(id) as total  FROM isi_materi WHERE materiId = $_GET[materiId]")); // ambil total halaman yang tersedia pada materi
$query = mysqli_query($koneksi, "SELECT *  FROM isi_materi i left join materi m on i.materiId = m.id WHERE materiId = $_GET[materiId] AND noHalaman = $_GET[noHalaman]"); // ambil data isi materi
$isiMateri = mysqli_fetch_array($query);
if ($isiMateri) { // jika materi yang dicari ada jalankan program berikut
    $isi = $isiMateri['isiHalaman'];
    $judul = $isiMateri['judulMateri'];

    $progres = mysqli_fetch_array(mysqli_query($koneksi, "SELECT currentPage FROM progres_materi WHERE materiId = $_GET[materiId] AND userId = $_SESSION[userLogin]")); // ambil data progres page user yang login
    if ($progres) { // jika sudah pernah ada progres 
        
        if ($progres['currentPage'] > $halamanSekarang) { // if untuk mengecek supaya ketika kembali halaman sebelumnya tidak mengubah data progres
            $page = $progres['currentPage'];
        } else {
            $page = $halamanSekarang;
        }


        $querySimpanProgres = mysqli_query($koneksi, "UPDATE progres_materi set currentPage='$page' WHERE materiId='$_GET[materiId]'AND userId='$_SESSION[userLogin]'"); // update progres
    } else { // jika belum ada progres
        
        
        $querySimpanProgres = mysqli_query($koneksi, "INSERT INTO progres_materi(userId,materiId,currentPage) VALUES('$_SESSION[userLogin]','$_GET[materiId]',$halamanSekarang)"); // tambah progres
    }
} else { //jika materi yang di cari tidak ada maka kosongkan halaman
    $isi = "";
    $judul = "JUDUL";
}

if ($halamanSekarang == $totalHalaman['total'] or $halamanSekarang > $totalHalaman['total']) { // if untuk menentukan tujuan halaman pada tombol next
    $nextPage = $halamanSekarang;
    $nextHidden = "invisible";
} else {
    $nextPage = $halamanSekarang + 1;
    $nextHidden = "";
}

if ($halamanSekarang == 1 or $halamanSekarang < 1) { // if untuk menentukan tujuan halaman pada tombol previous
    $previousPage = 1;
    $previousHidden = "invisible";
} else {
    $previousPage = $halamanSekarang - 1;
    $previousHidden = "";

}



?>
<!doctype html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
    body {
        background-color: azure;
    }

    .navbar {
        background-color: cadetblue;
    }

    a {
        text-decoration: none;
    }
    .attachment__caption{
        display: none;
    }
    .show{
        animation: 1s ease-out 0s 1 slideInFromBottom forwards;
    }
    @keyframes slideInFromBottom {
        0% {
            transform: translatey(100%);
        }

        100% {
            transform: translatey(0);
        }
    }
</style>
<title>Hello, world!</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><?= "Materi " . $judul; ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./../../../../pages/user/index.php?module=daftar_materi">Daftar Materi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php?materiId=<?= $_GET['materiId']; ?>&noHalaman=1">Mulai Ulang</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <section>

        <div id="materi" class="show container-fluid mt-5 d-flex justify-content-between align-items-center" style="min-height: 80vh;">
            <a class="arrow <?= $previousHidden; ?>" href="?materiId=<?= $_GET['materiId']; ?>&noHalaman=<?= $previousPage; ?>"><i class="fa fa-chevron-left" style="font-size: 40px;font-weight: normal;"></i></a>
            <div class="align-self-start"><?= $isi; ?></div>
            <a class="arrow <?= $nextHidden; ?>" href="?materiId=<?= $_GET['materiId']; ?>&noHalaman=<?= $nextPage; ?>"><i class="fa fa-chevron-right" style="font-size: 40px;font-weight: normal;"></i></a>
        </div>
    </section>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <script>
        document.getElementsByClassName("arrow").addEventListener("click", function() {
            fetch
        })
    </script>
</body>

</html>