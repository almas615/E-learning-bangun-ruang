<div class="col-sm-12">
    <div class="card-box table-responsive">

        <h4 class="m-t-0 header-title"><b>Daftar User</b></h4>
        <p class="text-muted font-13 m-b-30">
            
        </p>

        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap">
            <thead>
                <tr>

                    <th>Nama</th>
                    <th>Username</th>
                    <th>status</th>
                    <th>aksi</th>
            </thead>
            <tbody>
                <?php
                include "../../lib/koneksi.php";
                $query = mysqli_query($koneksi, "SELECT * FROM user");
                while ($user = mysqli_fetch_array($query)) {
                ?>

                    <tr>
                        <td><?= $user['nama']; ?></td>
                        <td><?= $user['username']; ?></td>
                        <td><?php echo ($user['isActive'] == 1)? "Aktif" :  "tidak aktif" ?></td>
                        <td><a class="btn btn-primary waves-effect w-md waves-light" href="module/user/aksi_edit.php?id=<?= $user['id']; ?>&action=<?= ($user['isActive']== 1)? "0":"1" ?>"><?= ($user['isActive']== 1)? "Non Aktifkan":"Aktifkan" ?></a></td>
                    </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>
</div>