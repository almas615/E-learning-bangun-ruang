<div class="col-xs-12">
    <div class="card-box">
        <h4 class="header-title m-t-0">Tambah Materi</h4>
        <p class="text-muted font-13 m-b-10">
            Parsley is a javascript form validation library. It helps you provide your users with feedback on their form submission before sending it to your server.
        </p>

        <div class="p-20">
            <form action="module/materi/aksi_tambah.php" method="POST">
                <div class="form-group">
                    <label for="topik">Topik<span class="text-danger">*</span></label>
                    <select id="topik" name="topik" class="selectpicker form-control" data-live-search="true" required>
                        <option value="">-- pilih topik --</option>
                        <?php
                        include "../../lib/koneksi.php";
                        $query = mysqli_query($koneksi, "SELECT * FROM topik");
                        while ($topik = mysqli_fetch_array($query)) {
                        ?>
                            <option value="<?= $topik['id']; ?>"><?= $topik['namaTopik']; ?></option>
                        <?php } ?>


                    </select>
                </div>
                <div class="form-group">
                    <label for="noMateri">NO Materi<span class="text-danger">*</span></label>
                    <input type="number" min="0" name="noMateri" parsley-trigger="change" required placeholder="masukkan Nomor Materi topik" class="form-control" id="noMateri">
                </div>
                <div class="form-group">
                    <label for="judulMateri">judul Materi<span class="text-danger">*</span></label>
                    <input type="text" name="judulMateri" parsley-trigger="change" required placeholder="masukkan judul Materi topik" class="form-control" id="judulMateri">
                </div>
                <div class="form-group">
                    <label for="isiMateri">isi Materi<span class="text-danger">*</span></label>
                    <input type="hidden" name="isiMateri" id="isiMateri">
                    <trix-editor input="isiMateri"></trix-editor>
                    
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