<?php
$idSoal = $_GET['id'];
include "../../lib/koneksi.php";
$query = mysqli_query($koneksi, "SELECT * FROM  soal  where id = $_GET[id]");
$soal = mysqli_fetch_array($query);

?>
<div class="col-sm-12">
    <div id="alert" class="alert alert-danger hidden" role="alert">
        <strong>Perhatian!</strong> jawaban yang benar harus berjumlah 1
    </div>
    <div class="card-box table-responsive">

        <h4 class="m-t-0 header-title"><b>Daftar Jawaban Soal No <?= $soal['noSoal']; ?> </b></h4>
        <p class="text-muted font-13 m-b-30">

        </p>
        <a class="btn btn-primary waves-effect w-md waves-light" href="index.php?module=tambah_jawaban&idSoal=<?= $soal['id']; ?>">Tambah</a>
        <br><br>
        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap m-t-30">
            <thead>
                <tr>
                    <th>Isi Jawaban</th>
                    <th>Is Correct</th>
                    <th>aksi</th>
            </thead>
            <tbody>
                <?php

                include "../../lib/koneksi.php";

                $query = mysqli_query($koneksi, "SELECT * FROM jawaban where soalId = $idSoal");
                while ($jawaban = mysqli_fetch_array($query)) {
                    $isCorrect = "false";
                    if ($jawaban['isCorrect'] == 1) {
                        $isCorrect = "true";
                    }
                ?>

                    <tr>
                        <td><?= $jawaban['isiJawaban']; ?></td>
                        <td class="status"><?= $isCorrect; ?></td>
                        <td> <a class="btn btn-primary waves-effect w-md waves-light" href="index.php?module=edit_jawaban&id=<?= $jawaban['id']; ?>">Ubah</a> <a class="btn btn-danger waves-effect w-md waves-light" onclick="return confirm('Are you sure?')" href="module/jawaban/aksi_hapus.php?id=<?= $jawaban['id']; ?>">Hapus</a></td>

                    </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>
</div>

<script>
    let filterTopik = document.getElementById('filter_topik');

    function filter() {
        window.location = 'index.php?module=daftar_soal&topikId=' + filterTopik.value;
    }
    let status = document.querySelectorAll('.status');
    let benar = 0;
    status.forEach((element) => {
        if (element.innerText.includes('true')) benar++;
    });
    if (benar !=1) {
        document.getElementById('alert').classList.remove("hidden");
    }
</script>