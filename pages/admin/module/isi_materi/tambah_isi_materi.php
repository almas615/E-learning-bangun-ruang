<?php
include "../../lib/koneksi.php";
$materiId = $_GET['materiId'];
$query = mysqli_query($koneksi, "SELECT * FROM materi where id=$materiId");
$materi = mysqli_fetch_array($query);
?>
<div class="col-xs-12">
    <div class="card-box">
        <h4 class="header-title m-t-0">Tambah Isi Materi <?= $materi['judulMateri']; ?></h4>
        <p class="text-muted font-13 m-b-10">

        </p>

        <div class="p-20">
            <div class="form-group">
                <select id="isActive" name="isActive" class="form-control" data-live-search="true" Readonly>
                    <option value="">-- Daftar No halaman Yang Telah Diinput --</option>
                    <?php
                    $queryNoHalaman = mysqli_query($koneksi, "SELECT noHalaman FROM isi_materi where materiId=$materiId ORDER BY noHalaman ASC");
                    while ($no = mysqli_fetch_array($queryNoHalaman)) {
                    ?>
                        <option value=""><?= $no['noHalaman']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <form action="module/isi_materi/aksi_tambah.php?materiId=<?= $materiId; ?>" method="POST">
                <div class="form-group">
                    <label for="noHalaman">NO Halaman<span class="text-danger">*</span></label>
                    <input type="number" min="0" name="noHalaman" parsley-trigger="change" required placeholder="masukkan Nomor Materi topik" class="form-control" id="noHalaman">
                </div>
                <div class="form-group">
                    <label for="isiHalaman">Isi Halaman<span class="text-danger">*</span></label>
                    <input type="hidden" name="isiHalaman" id="isiHalaman">
                    <trix-editor input="isiHalaman"></trix-editor>

                </div>


                <div class="form-group text-right m-b-0">
                    <button class="btn btn-primary waves-effect waves-light" type="submit">
                        Simpan
                    </button>
                    <button type="reset" class="btn btn-default waves-effect m-l-5">
                        Kembali
                    </button>
                </div>

            </form>
        </div>


    </div>
</div>
<script>

</script>