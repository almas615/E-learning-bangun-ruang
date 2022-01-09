<?php
$idAdmin = $_SESSION['userLogin'];
include "../../lib/koneksi.php";
$kueri = mysqli_query($koneksi, "SELECT * FROM admin where id='$idAdmin'");
$admin = mysqli_fetch_array($kueri);

?>

<div class="col-xs-12">
    <div class="card-box">
        <h4 class="header-title m-t-0">Edit Admin</h4>
        <p class="text-muted font-13 m-b-10">

        </p>

        <div class="p-20">
            <form action="module/profile/aksi_edit.php?id=<?= $admin['id']; ?>" method="POST" data-parsley-validate novalidate>
                <div class="form-group">
                    <label for="namaAdmin">Nama Admin<span class="text-danger">*</span></label>
                    <input type="text" name="namaAdmin" value="<?= $admin['namaAdmin']; ?>" parsley-trigger="change" required placeholder="masukkan nama admin" class="form-control" id="namaAdmin">
                </div>
                <div class="form-group">
                    <label for="username">username<span class="text-danger">*</span></label>
                    <input type="text" name="username" value="<?= $admin['username']; ?>" parsley-trigger="change" required placeholder="masukkan username admin" class="form-control" id="username">
                </div>
                <div class="form-group hidden" id="pass-container">
                    <label for="password">password<span class="text-danger">*</span></label>
                    <input type="text" name="password" value="<?= $admin['password']; ?>"  parsley-trigger="change" required placeholder="masukkan password admin" class="form-control" id="password">
                </div>
                <div class="form-group">
                <div class="btn btn-primary waves-effect waves-light" id="btn-ganti-pass">
                        Ganti Password
                    </div>
                </div>
                <!-- <div class="form-group">
                    <label for="isActive">status<span class="text-danger">*</span></label>
                    <select id="isActive" name="isActive" class="form-control" data-live-search="true" required>
                        <option value="0" <?= ($admin['isActive']==0)? "selected":"" ?>>tidak aktif</option>
                        <option value="1" <?= ($admin['isActive']==1)? "selected":"" ?>>aktif</option>
                    </select>
                </div> -->

                <div class="form-group text-right m-b-0">
                    
                    <button class="btn btn-primary waves-effect waves-light" type="submit">
                        Simpan
                    </button>

                </div>

            </form>
        </div>


    </div>
</div>
<script>
    const passwordContainer = document.getElementById('pass-container');
    const pass = document.getElementById('password');
    const btn = document.getElementById('btn-ganti-pass');

    btn.addEventListener("click",function () {
        if (passwordContainer.classList.contains('hidden')) {
            passwordContainer.classList.remove('hidden')
        } else{
            passwordContainer.classList.add('hidden')
        }
    })
</script>