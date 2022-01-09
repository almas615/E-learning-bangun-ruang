<?php 
include "../../lib/koneksi.php";
 $materiId = $_GET['materiId'];
$query = mysqli_query($koneksi, "SELECT * FROM materi where id=$materiId");
$materi = mysqli_fetch_array($query); 
?>
<div class="col-sm-12">
    <div class="card-box table-responsive">

        <h4 class="m-t-0 header-title"><b>Daftar Isi Materi <?= $materi['judulMateri']; ?></b></h4>
        <p class="text-muted font-13 m-b-30">
            
        </p>
        <a class="btn btn-primary waves-effect w-md waves-light" href="index.php?module=tambah_isi_materi&materiId=<?= $materiId; ?>">Tambah</a>
        <br><br>
        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap m-t-30">
            <thead>
                <tr>

                    <th>Nomor Halaman</th>
                    <th>Isi Halaman</th>
         
                    <th>Aksi</th>
            </thead>
            <tbody>
                <?php
                $materiId = $_GET['materiId'];
                include "../../lib/koneksi.php";
                $query = mysqli_query($koneksi, "SELECT * FROM isi_materi where materiId=$materiId");
                while ($isi = mysqli_fetch_array($query)) {
                ?>

                    <tr>
                        <td><?= $isi['noHalaman']; ?></td>
                        <td><?= $isi['isiHalaman']; ?></td>
                        <td><a class="btn btn-success waves-effect w-md waves-light" href="">Detail</a> <a class="btn btn-primary waves-effect w-md waves-light" href="index.php?module=edit_isi_materi&id=<?= $isi['id']; ?>">Ubah</a> <a class="btn btn-danger waves-effect w-md waves-light" href="module/isi_materi/aksi_hapus.php?id=<?= $isi['id']; ?>" onclick="return confirm('Are you sure?')">Hapus</a></td>

                    </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>
</div>

<script>
    let filterTopik = document.getElementById('filter_topik');
    function filter () {
        window.location = 'index.php?module=daftar_materi&topikId=' + filterTopik.value;
    }
</script>