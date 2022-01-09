<?php
$idMateri = $_GET['id'];
include "../../lib/koneksi.php";
$kueri = mysqli_query($koneksi, "SELECT * FROM materi where id='$idMateri'");
$materi = mysqli_fetch_array($kueri);

?>

<div class="col-xs-12">
    <div class="card-box">
        <h4 class="header-title m-t-0">Edit Materi</h4>
        <p class="text-muted font-13 m-b-10">
            
        </p>

        <div class="p-20">
            <form action="module/materi/aksi_edit.php?id=<?= $materi['id']; ?>" method="POST">
                <!-- <div class="form-group">
                    <label for="topik">Topik<span class="text-danger">*</span></label>
                    <select id="topik" name="topik" class="selectpicker form-control" data-live-search="true" required>
                        <option value="">-- pilih topik --</option>
                        <?php
                        include "../../lib/koneksi.php";
                        $query = mysqli_query($koneksi, "SELECT * FROM topik");
                        while ($topik = mysqli_fetch_array($query)) {
                        ?>
                            <option value="<?= $topik['id']; ?>" <?php if ($topik['id'] == $materi['topikId']) {
                                                                        echo "selected";
                                                                    } ?>><?= $topik['namaTopik']; ?></option>
                        <?php } ?>


                    </select>
                </div> -->

                <div class="form-group">
                    <label for="judulMateri">judul Materi<span class="text-danger">*</span></label>
                    <input type="text" name="judulMateri" parsley-trigger="change" value="<?= $materi['judulMateri']; ?>" required placeholder="masukkan judul Materi topik" class="form-control" id="judulMateri">
                </div>
                <!-- <div class="form-group">
                    <label for="isiMateri">isi Materi<span class="text-danger">*</span></label>
                    <input type="hidden" name="isiMateri" id="isiMateri" value="">
                    <trix-editor input="isiMateri"><?= $materi['isiMateri']; ?></trix-editor>

                </div> -->


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