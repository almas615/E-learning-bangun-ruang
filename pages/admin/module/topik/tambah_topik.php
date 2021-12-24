<div class="col-xs-12">
    <div class="card-box">
        <h4 class="header-title m-t-0">Tambah Topik</h4>
        <p class="text-muted font-13 m-b-10">
            Parsley is a javascript form validation library. It helps you provide your users with feedback on their form submission before sending it to your server.
        </p>

        <div class="p-20">
            <form action="module/topik/aksi_tambah.php" method="POST" data-parsley-validate novalidate>
                <div class="form-group">
                    <label for="userName">Nama Topik<span class="text-danger">*</span></label>
                    <input type="text" name="namaTopik" parsley-trigger="change" required placeholder="masukkan nama topik" class="form-control" id="namaTopik">
                </div>
                <div class="form-group">
                    <label for="deskripsi">deskripsi<span class="text-danger">*</span></label>
                    <input type="text" name="deskripsi" parsley-trigger="change" required placeholder="masukkan deskripsi topik" class="form-control" id="deskripsi">
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