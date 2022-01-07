<?php
$idJawaban = $_GET['id'];
include "../../lib/koneksi.php";
$kueri = mysqli_query($koneksi, "SELECT * FROM jawaban where id='$idJawaban'");
$jawaban = mysqli_fetch_array($kueri);

?>

<div class="col-xs-12">
    <div class="card-box">
        <h4 class="header-title m-t-0">Edit Jawaban</h4>
        <p class="text-muted font-13 m-b-10">
            Parsley is a javascript form validation library. It helps you provide your users with feedback on their form submission before sending it to your server.
        </p>

        <div class="p-20">
            <form action="module/jawaban/aksi_edit.php?idJawaban=<?= $idJawaban; ?>" method="POST">
                
                <div class="form-group">
                    <label for="isiJawaban">isi Jawaban<span class="text-danger">*</span></label>
                    <input type="hidden" name="isiJawaban" id="isiJawaban">
                    <trix-editor input="isiJawaban"><?= $jawaban['isiJawaban']; ?></trix-editor>
                    
                </div>
                <div class="form-group">
                    <label for="isCorrect">Is Correct<span class="text-danger">*</span></label>
                    <select id="isCorrect" name="isCorrect" class="form-control" data-live-search="true" required>
                        <option value="0" <?php if ($jawaban['isCorrect'] == '0') {
                            echo "selected";
                        } ?>>false</option>
                        <option value="1" <?php if ($jawaban['isCorrect'] == '1') {
                            echo "selected";
                        } ?>>true</option>
                    </select>
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