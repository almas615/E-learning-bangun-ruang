<?php 
session_start();
include "../../lib/koneksi.php";
$jawaban = $_POST['jawaban'];
$materiId = $_GET['materiId'];
$querySoal = mysqli_query($koneksi,"SELECT * FROM soal WHERE materiId = $materiId ");
while ($soal = mysqli_fetch_array($querySoal)) {
    $soalId = $soal['id'];
    $jawabanSoal = $jawaban[$soalId];
    $jawabanBenar =mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM jawaban WHERE soalId = $soalId AND isCorrect = 1")) ;
    echo $jawabanSoal . "-" . $jawabanBenar['id'] . " | " ;
    $cekQuiz =mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM quiz WHERE userId = $_SESSION[userLogin] AND soalId = $soalId"));
    if (!$cekQuiz) {
        echo 'belum pernah mualai';
        if($jawabanSoal == $jawabanBenar['id']){
            $querySimpan = mysqli_query($koneksi, "INSERT INTO quiz(userId,soalId,hasil) VALUES('$_SESSION[userLogin]','$soalId','1')");
            echo "benar";
        }
        if ($jawabanSoal != $jawabanBenar['id']) {
            $querySimpan = mysqli_query($koneksi, "INSERT INTO quiz(userId,soalId,hasil) VALUES('$_SESSION[userLogin]','$soalId','0')");
            echo "salah";
        }
    }else{
        echo "sudah pernah mulai";
        if($jawabanSoal == $jawabanBenar['id']){
            $querySimpan = mysqli_query($koneksi, "UPDATE quiz set hasil='1' WHERE userId = '$_SESSION[userLogin]' AND soalId = '$soalId'");
            echo "benar";
        }
        if ($jawabanSoal != $jawabanBenar['id']) {
            $querySimpan = mysqli_query($koneksi, "UPDATE quiz set hasil='0' WHERE userId = '$_SESSION[userLogin]' AND soalId = '$soalId'");
            echo "salah";
        }
    }
    if ($querySimpan) {
        echo "<script>window.location='../user/index.php?module=daftar_materi';</script>";
    } else {
        echo "<script>window.location='../user/index.php?module=daftar_materi';</script>";
    }
}


?>