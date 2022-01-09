<?php 
include "../../lib/koneksi.php";
$query = mysqli_query($koneksi, "SELECT * FROM materi WHERE id = '$_GET[materiId]'");
$materi = mysqli_fetch_array($query);
?>
<div class="col-xs-12">
    <div class="card-box">
        <h4 class="header-title m-t-0">Tambah Soal Materi <?= $materi['judulMateri']; ?></h4>
        <p class="text-muted font-13 m-b-10">
            
        </p>

        <div class="p-20">
        <div class="form-group">
                <select id="isActive" name="isActive" class="form-control" data-live-search="true" Readonly>
                    <option value="">-- Daftar Soal Yang Telah Terdata --</option>
                    <?php
                        include "../../lib/koneksi.php";
                    $queryNoHalaman = mysqli_query($koneksi, "SELECT noSoal FROM soal where materiId=$_GET[materiId]");
                    while ($no = mysqli_fetch_array($queryNoHalaman)) {
                    ?>
                        <option value=""><?= $no['noSoal']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <form action="module/soal/aksi_tambah.php?materi=<?= $_GET['materiId']; ?>" method="POST">
                <div class="form-group">
                    <label for="noSoal">NO Soal<span class="text-danger">*</span></label>
                    <input type="number" min="0" name="noSoal" parsley-trigger="change" required placeholder="masukkan Nomor Soal topik" class="form-control" id="noSoal">
                </div>
                <div class="form-group">
                    <label for="isiSoal">isi Soal<span class="text-danger">*</span></label>
                    <input type="hidden" name="isiSoal" id="isiSoal">
                    <trix-editor input="isiSoal"></trix-editor>
                    
                </div>


                <div class="form-group text-right m-b-0">
                    <button class="btn btn-primary waves-effect waves-light" type="submit">
                        Submit
                    </button>
                    <button type="reset" class="btn btn-default waves-effect m-l-5">
                        Cancel
                    </button>
                </div>

            </form>
        </div>


    </div>
</div>