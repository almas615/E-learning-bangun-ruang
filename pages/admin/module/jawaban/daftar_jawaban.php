<?php 
$idSoal = $_GET['id'];
include "../../lib/koneksi.php";
$query = mysqli_query($koneksi, "SELECT * FROM  soal  where id = $_GET[id]");
$soal = mysqli_fetch_array($query); 

?>
<div class="col-sm-12">
    <div class="card-box table-responsive">

        <h4 class="m-t-0 header-title"><b>Daftar Jawaban Soal No <?= $soal['noSoal']; ?> </b></h4>
        <p class="text-muted font-13 m-b-30">
            Responsive is an extension for DataTables that resolves that problem by optimising the
            table's layout for different screen sizes through the dynamic insertion and removal of
            columns from the table.
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
                        $isCorrect="true";
                    }
                ?>

                    <tr>
                        <td><?= $jawaban['isiJawaban']; ?></td>
                        <td><?= $isCorrect; ?></td>
                        <td><a class="btn btn-success waves-effect w-md waves-light" href="">Detail</a> <a class="btn btn-primary waves-effect w-md waves-light" href="index.php?module=edit_jawaban&id=<?= $jawaban['id']; ?>">Edit</a> <a class="btn btn-danger waves-effect w-md waves-light" onclick="return confirm('Are you sure?')" href="module/jawaban/aksi_hapus.php?id=<?= $jawaban['id']; ?>">Delete</a></td>

                    </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>
</div>

<script>
    let filterTopik = document.getElementById('filter_topik');
    function filter () {
        window.location = 'index.php?module=daftar_soal&topikId=' + filterTopik.value;
    }
</script>