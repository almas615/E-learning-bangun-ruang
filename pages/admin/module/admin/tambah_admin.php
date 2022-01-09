<div class="col-xs-12">
    <div class="card-box">
        <h4 class="header-title m-t-0">Tambah Admin</h4>
        <p class="text-muted font-13 m-b-10">
            
        </p>

        <div class="p-20">
            <form action="module/admin/aksi_tambah.php" method="POST" data-parsley-validate novalidate>
            <div class="form-group">
                    <label for="namaAdmin">Nama Admin<span class="text-danger">*</span></label>
                    <input type="text" name="namaAdmin"  parsley-trigger="change" required placeholder="masukkan nama admin" class="form-control" id="namaAdmin">
                </div>
                <div class="form-group">
                    <label for="username">Username<span class="text-danger">*</span></label>
                    <input type="text" name="username"  parsley-trigger="change" required placeholder="masukkan username admin" class="form-control" id="username">
                </div>
                <div class="form-group">
                    <label for="password">Password<span class="text-danger">*</span></label>
                    <input type="text" name="password"  parsley-trigger="change" required placeholder="masukkan password admin" class="form-control" id="password">
                </div>

                <!-- <div class="form-group">
                    <label for="isActive">Status<span class="text-danger">*</span></label>
                    <select id="isActive" name="isActive" class="form-control" data-live-search="true" required>
                        <option value="0" >tidak aktif</option>
                        <option value="1" selected>aktif</option>
                    </select>
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