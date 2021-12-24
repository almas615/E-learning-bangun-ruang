<div class="col-sm-12">
    <div class="card-box table-responsive">

        <h4 class="m-t-0 header-title"><b>Daftar Materi</b></h4>
        <p class="text-muted font-13 m-b-30">
            Responsive is an extension for DataTables that resolves that problem by optimising the
            table's layout for different screen sizes through the dynamic insertion and removal of
            columns from the table.
        </p>
        <div class="m-b-30" style="width: 200px;">
            <select id="filter_topik" class="selectpicker" data-live-search="true" data-style="btn-orange" onchange="filter()">
                <option value="0">-- pilih topik --</option>
                <?php
                include "../../lib/koneksi.php";
                $query = mysqli_query($koneksi, "SELECT * FROM topik");
                while ($topik = mysqli_fetch_array($query)) {
                ?>
                    <option value="<?= $topik['id']; ?>" <?php if ($_GET['topikId'] == $topik['id']) {
                        echo "selected";
                    } ?>><?= $topik['namaTopik']; ?></option>
                <?php } ?>


            </select>
        </div>


        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap m-t-30">
            <thead>
                <tr>

                    <th>Nomor Materi</th>
                    <th>Judul Materi</th>
                    <th>Isi Materi</th>
                    <th>Aksi</th>
            </thead>
            <tbody>
                <?php
                $topikId = $_GET['topikId'];
                include "../../lib/koneksi.php";
                $query = mysqli_query($koneksi, "SELECT * FROM materi where topikId = $topikId");
                while ($materi = mysqli_fetch_array($query)) {
                ?>

                    <tr>
                        <td><?= $materi['noMateri']; ?></td>
                        <td><?= $materi['judulMateri']; ?></td>
                        <td><?= $materi['isiMateri']; ?></td>
                        <td><a class="btn btn-success waves-effect w-md waves-light" href="">Detail</a> <a class="btn btn-primary waves-effect w-md waves-light" href="index.php?module=edit_materi&id=<?= $materi['id']; ?>">Edit</a> <a class="btn btn-danger waves-effect w-md waves-light" href="module/materi/aksi_hapus.php?id=<?= $materi['id']; ?>" onclick="return confirm('Are you sure?')">Delete</a></td>

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