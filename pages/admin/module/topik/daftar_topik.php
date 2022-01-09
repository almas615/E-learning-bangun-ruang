<div class="col-sm-12">
    <div class="card-box table-responsive">

        <h4 class="m-t-0 header-title"><b>Daftar Topik</b></h4>
        <p class="text-muted font-13 m-b-30">
            
        </p>

        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap">
            <thead>
                <tr>

                    <th>Nama Topik</th>
                    <th>Deskripsi</th>
                    <th>aksi</th>
                  

            </thead>
            <tbody>
                <?php
                include "../../lib/koneksi.php";
                $query = mysqli_query($koneksi, "SELECT * FROM topik");
                while ($user = mysqli_fetch_array($query)) {
                ?>

                    <tr>
                        <td><?= $user['namaTopik']; ?></td>
                        <td><?= $user['deskripsi']; ?></td>
                        <td><a class="btn btn-success waves-effect w-md waves-light" href="">Detail</a> <a class="btn btn-primary waves-effect w-md waves-light" href="index.php?module=edit_topik&id=<?= $user['id']; ?>">Edit</a> <a class="btn btn-danger waves-effect w-md waves-light" href="module/topik/aksi_hapus.php?id=<?= $user['id']; ?>" onclick="return confirm('Are you sure?')">Delete</a></td>

                    </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>
</div>