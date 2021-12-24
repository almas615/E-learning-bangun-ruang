<?php
$idTopik = $_GET['id'];
include "../../lib/koneksi.php";
$kueri = mysqli_query($koneksi, "SELECT * FROM topik where id='$idTopik'");
$topik = mysqli_fetch_array($kueri);

?>

<div class="col-xs-12">
    <div class="card-box">
        <h4 class="header-title m-t-0">Edit Topik</h4>
        <p class="text-muted font-13 m-b-10">
            
        </p>

        <div class="p-20">
            <form action="module/topik/aksi_edit.php?id=<?= $topik['id']; ?>" method="POST" data-parsley-validate novalidate>
                <div class="form-group">
                    <label for="userName">Nama Topik<span class="text-danger">*</span></label>
                    <input type="text" name="namaTopik" value="<?= $topik['namaTopik']; ?>" parsley-trigger="change" required placeholder="masukkan nama topik" class="form-control" id="namaTopik">
                </div>
                <div class="form-group">
                    <label for="deskripsi">deskripsi<span class="text-danger">*</span></label>
                    <input type="text" name="deskripsi" value="<?= $topik['deskripsi']; ?>" parsley-trigger="change" required placeholder="masukkan deskripsi topik" class="form-control" id="deskripsi">
                </div>

                <div class="form-group text-right m-b-0">
                    <button class="btn btn-primary waves-effect waves-light" type="submit">
                        Submit
                    </button>
                    
                </div>

            </form>
        </div>


    </div>
</div>