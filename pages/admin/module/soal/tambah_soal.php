<div class="col-xs-12">
    <div class="card-box">
        <h4 class="header-title m-t-0">Tambah Soal</h4>
        <p class="text-muted font-13 m-b-10">
            Parsley is a javascript form validation library. It helps you provide your users with feedback on their form submission before sending it to your server.
        </p>

        <div class="p-20">
            <form action="module/soal/aksi_tambah.php" method="POST">
                <div class="form-group">
                    <label for="materi">materi<span class="text-danger">*</span></label>
                    <select id="materi" name="materi" class="selectpicker form-control" data-live-search="true" required>
                        <option value="">-- pilih materi --</option>
                        <?php
                        include "../../lib/koneksi.php";
                        $query = mysqli_query($koneksi, "SELECT * FROM materi");
                        while ($materi = mysqli_fetch_array($query)) {
                        ?>
                            <option value="<?= $materi['id']; ?>"><?= $materi['judulMateri']; ?></option>
                        <?php } ?>


                    </select>
                </div>
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