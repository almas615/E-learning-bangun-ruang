<div class="col-sm-12">
    <div class="card-box table-responsive">

        <h4 class="m-t-0 header-title"><b>Daftar Soal</b></h4>
        <p class="text-muted font-13 m-b-30">
        </p>
        <div class="m-b-30 d-flex" style="width: 80%;">
            <select id="filter_materi" class="selectpicker col-6" data-live-search="true" data-style="btn-inverse" onchange="filter()">
                <option value="0">-- pilih materi --</option>
                <?php
                include "../../lib/koneksi.php";
                $query = mysqli_query($koneksi, "SELECT * FROM materi");
                while ($materi = mysqli_fetch_array($query)) {
                ?>
                    <option value="<?= $materi['id']; ?>" <?php if ($_GET['materiId'] == $materi['id']) {
                        echo "selected";
                    } ?>><?= $materi['judulMateri']; ?></option>
                <?php } ?>


            </select>
        <a class="col-4 mt-5 btn btn-primary waves-effect w-md waves-light" href="index.php?module=tambah_soal&materiId=<?= $_GET['materiId']; ?>">Tambah</a>

        </div>


        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap m-t-30">
            <thead>
                <tr>

                    <th>Nomor Soal</th>
                    <th>Isi Soal</th>
                   
                    <th>aksi</th>
            </thead>
            <tbody>
                <?php
                $materiId = $_GET['materiId'];
                include "../../lib/koneksi.php";
                $query = mysqli_query($koneksi, "SELECT * FROM soal where materiId = $materiId");
                while ($soal = mysqli_fetch_array($query)) {
                ?>

                    <tr>
                        <td><?= $soal['noSoal']; ?></td>
                        <td><?= $soal['isiSoal']; ?></td>
                       
                        <td><a class="btn btn-success waves-effect w-md waves-light" href="index.php?module=daftar_jawaban&id=<?= $soal['id']; ?>">Jawaban</a> <a class="btn btn-primary waves-effect w-md waves-light" href="index.php?module=edit_soal&id=<?= $soal['id']; ?>">Ubah</a> <a class="btn btn-danger waves-effect w-md waves-light" href="module/soal/aksi_hapus.php?id=<?= $soal['id']; ?>">Hapus</a></td>

                    </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>
</div>

<script>
    let filterMateri = document.getElementById('filter_materi');
    function filter () {
        window.location = 'index.php?module=daftar_soal&materiId=' + filterMateri.value;
    }
</script>