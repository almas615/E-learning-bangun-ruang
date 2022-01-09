<div class="col-sm-12">
    <div class="card-box table-responsive">

        <h4 class="m-t-0 header-title"><b>Daftar Admin</b></h4>
        <p class="text-muted font-13 m-b-30">
            
        </p>

        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap">
            <thead>
                <tr>

                    <th>Nama</th>
                    <th>Username</th>
                    <th>Status</th>
                    <th>Aksi</th>
            </thead>
            <tbody>
                <?php
                include "../../lib/koneksi.php";
                $query = mysqli_query($koneksi, "SELECT * FROM admin");
                while ($admin = mysqli_fetch_array($query)) {
                ?>

                    <tr>
                        <td><?= $admin['namaAdmin']; ?></td>
                        <td><?= $admin['username']; ?></td>
                        <td><?php echo ($admin['isActive'] == 1)? "Aktif" :  "tidak aktif" ?></td>
                        <td><a class="btn btn-primary waves-effect w-md waves-light" href="index.php?module=edit_admin&id=<?= $admin['id']; ?>">Ubah</a> <a class="btn btn-danger waves-effect w-md waves-light" href="<?= ($admin['isActive'] == 0)? "module/topik/aksi_hapus.php?id=$admin[id]" :  "javascript:void(0)" ?>" onclick="<?= ($admin['isActive'] == 0)? "return confirm('Are you sure?')" :  "" ?>"  <?= ($admin['isActive'] == 1)? "disabled" :  "" ?>>Hapus</a></td>
                    </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>
</div>