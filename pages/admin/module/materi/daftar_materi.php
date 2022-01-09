<div class="col-sm-12">
    <div class="card-box table-responsive">

        <h4 class="m-t-0 header-title"><b>Daftar Judul Materi</b></h4>
        <p class="text-muted font-13 m-b-30">
            
        </p>
        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap m-t-30">
            <thead>
                <tr>

                    <th>No</th>
                    <th>Judul Materi</th>
         
                    <th>Aksi</th>
            </thead>
            <tbody>
                <?php
                
                include "../../lib/koneksi.php";
                $query = mysqli_query($koneksi, "SELECT * FROM materi");
                $no=0;
                while ($materi = mysqli_fetch_array($query)) {
                ?>

                    <tr>
                        <td><?= ++$no; ?></td>
                        <td><?= $materi['judulMateri']; ?></td>
                        <td><a class="btn btn-success waves-effect w-md waves-light" href="index.php?module=daftar_isi_materi&materiId=<?= $materi['id']; ?>">Daftar Isi Materi</a> <a class="btn btn-success waves-effect w-md waves-light" href="index.php?module=daftar_soal&materiId=<?= $materi['id']; ?>">Daftar Soal</a> <a class="btn btn-primary waves-effect w-md waves-light" href="index.php?module=edit_materi&id=<?= $materi['id']; ?>">Ubah</a> <a class="btn btn-danger waves-effect w-md waves-light" href="module/materi/aksi_hapus.php?id=<?= $materi['id']; ?>" onclick="return confirm('Are you sure?')">Hapus</a></td>

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