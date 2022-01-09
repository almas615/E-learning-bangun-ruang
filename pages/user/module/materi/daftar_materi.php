<?php

?>
<div class="col-sm-12">
    <div class="card-box table-responsive">

        <h4 class="m-t-0 header-title"><b>Daftar Materi</b></h4>
        <p class="text-muted font-13 m-b-30">
            
        </p>
        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap m-t-30">
            <thead>
                <tr>

                    <th>No</th>
                    <th>Judul Materi</th>
                    <th>Progres Belajar</th>
                    <th>Nilai Quizz</th>
                    <th>Aksi</th>
            </thead>
            <tbody>
                <?php

                include "../../lib/koneksi.php";
                $query = mysqli_query($koneksi, "SELECT * FROM materi");
                $no = 0;
                while ($materi = mysqli_fetch_array($query)) {
                    //mencari data no halaman terakhir pada isi materi
                    $halamanAkhir = mysqli_fetch_array(mysqli_query($koneksi, "SELECT noHalaman  FROM isi_materi WHERE materiId = $materi[id] ORDER BY noHalaman DESC Limit 1"));
                    if(!isset($halamanAkhir['noHalaman'])) {
                        $halamanAkhir['noHalaman'] = 0;
                    }
                    // mencari data halaman sekarang pada progres materir
                    $halamanSekarang = mysqli_fetch_array(mysqli_query($koneksi, "SELECT currentPage  FROM progres_materi WHERE materiId = $materi[id] AND userId=$_SESSION[userLogin]"));
                    if (!$halamanSekarang) {
                        $halaman = 0;
                    } else {
                        $halaman = $halamanSekarang['currentPage'];
                    }

                ?>

                    <tr>
                        <td><?= ++$no; ?></td>
                        <td><?= $materi['judulMateri']; ?></td>
                        <td><?php echo $halaman . "/" . $halamanAkhir['noHalaman'] ?> <?= ($halaman == $halamanAkhir['noHalaman'] AND $halaman > 0)? " - selesai" : ""?></td>
                        <?php
                        //mencari data jumlah total soal
                        $totalSoal = mysqli_fetch_array(mysqli_query($koneksi, "SELECT count(id) as total  FROM soal WHERE materiId = $materi[id]"));
                        //mencari data jumlah jawaban yang benar
                        $totalJawabanBenar = mysqli_fetch_array(mysqli_query($koneksi, "SELECT count(q.id) as total  FROM quiz q right join soal s on q.soalId = s.id WHERE q.userId = '$_SESSION[userLogin]' AND q.hasil = '1' AND s.materiId = '$materi[id]'"));
                        // cek apakah sudah pernah menjawab quiz
                        $cekJawaban = mysqli_fetch_array(mysqli_query($koneksi, "SELECT q.id  FROM quiz q right join soal s on q.soalId = s.id WHERE q.userId = '$_SESSION[userLogin]' AND s.materiId = '$materi[id]'"));

                        if ($totalJawabanBenar['total'] > 0) { // jika jawaban benar lebih dari 0 maka hitung rumus ini
                            $nilai = floor($totalJawabanBenar['total'] /  $totalSoal['total'] * 100); // rumus hitung nilai
                        }else{ // jika jawaban benar 0 maka isi nilai sesuai kondisi dibawah
                            if (!isset($cekJawaban['id'])){ // jika belum pernah menjawab quiz maka isi dengan -
                                $nilai = "-";
                            }else{ // jika sudah pernah menjawab quiz isi dengan nilai 0
                                $nilai = 0;
                            }
                        }
                        ?>
                        <td><?= $nilai; ?></td>
                        <td><a class="btn btn-success waves-effect w-md waves-light" href="./../../../../pages/belajar/index.php?materiId=<?= $materi['id']; ?>&noHalaman=<?php echo ($halaman == 0) ?  "1" : $halaman; ?>">Mulai Belajar</a> <a class="btn btn-primary waves-effect w-md waves-light" href="./../../../../pages/quiz/index.php?materiId=<?= $materi['id']; ?>">Mulai Quizz</a></td>

                    </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>
</div>

<script>
    let filterTopik = document.getElementById('filter_topik');

    function filter() {
        window.location = 'index.php?module=daftar_materi&topikId=' + filterTopik.value;
    }
</script>