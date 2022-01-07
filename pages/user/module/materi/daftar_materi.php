<?php

?>
<div class="col-sm-12">
    <div class="card-box table-responsive">

        <h4 class="m-t-0 header-title"><b>Daftar Materi</b></h4>
        <p class="text-muted font-13 m-b-30">
            Responsive is an extension for DataTables that resolves that problem by optimising the
            table's layout for different screen sizes through the dynamic insertion and removal of
            columns from the table.
        </p>
        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap m-t-30">
            <thead>
                <tr>

                    <th>Nomor Materi</th>
                    <th>Judul Materi</th>
                    <th>Progres Belajar</th>
                    <th>Nilai Quizz</th>
                    <th>Aksi</th>
            </thead>
            <tbody>
                <?php

                include "../../lib/koneksi.php";
                $query = mysqli_query($koneksi, "SELECT * FROM materi");
                while ($materi = mysqli_fetch_array($query)) {
                    $jumlahHalaman = mysqli_fetch_array(mysqli_query($koneksi, "SELECT count(id) as total  FROM isi_materi WHERE materiId = $materi[id]"));
                    $halamanSekarang = mysqli_fetch_array(mysqli_query($koneksi, "SELECT currentPage  FROM progres_materi WHERE materiId = $materi[id] AND userId=$_SESSION[userLogin]"));
                    if (!$halamanSekarang) {
                        $halaman = 0;
                    } else {
                        $halaman = $halamanSekarang['currentPage'];
                    }

                ?>

                    <tr>
                        <td><?= $materi['noMateri']; ?></td>
                        <td><?= $materi['judulMateri']; ?></td>
                        <td><?php echo $halaman . "/" . $jumlahHalaman['total'] ?></td>
                        <?php
                        $totalSoal = mysqli_fetch_array(mysqli_query($koneksi, "SELECT count(id) as total  FROM soal WHERE materiId = $materi[id]"));
                        $totalJawabanBenar = mysqli_fetch_array(mysqli_query($koneksi, "SELECT count(q.id) as total  FROM quiz q right join soal s on q.soalId = s.id WHERE q.userId = '$_SESSION[userLogin]' AND q.hasil = '1' AND s.materiId = '$materi[id]'"));
                        if ($totalJawabanBenar['total'] > 0) {
                            $nilai = $totalJawabanBenar['total'] /  $totalSoal['total'] * 100;
                        }else{
                            $nilai = 0;
                        }
                        ?>
                        <td><?= floor($nilai); ?></td>
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