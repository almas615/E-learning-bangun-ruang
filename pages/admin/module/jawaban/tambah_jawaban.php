<div class="col-xs-12">
    <div class="card-box">
        <h4 class="header-title m-t-0">Tambah Jawaban</h4>
        <p class="text-muted font-13 m-b-10">
            
        </p>

        <div class="p-20">
            
            <form action="module/jawaban/aksi_tambah.php?idSoal=<?= $_GET['idSoal']; ?>" method="POST">
                
                <div class="form-group">
                    <label for="isiJawaban">isi Jawaban<span class="text-danger">*</span></label>
                    <input type="hidden" name="isiJawaban" id="isiJawaban">
                    <trix-editor input="isiJawaban"></trix-editor>
                    
                </div>
                <div class="form-group">
                    <label for="isCorrect">Is Correct<span class="text-danger">*</span></label>
                    <select id="isCorrect" name="isCorrect" class="form-control" data-live-search="true" required>
                        <option value="0">false</option>
                        <option value="1">true</option>
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