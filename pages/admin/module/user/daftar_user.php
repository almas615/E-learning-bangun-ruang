<div class="col-sm-12">
    <div class="card-box table-responsive">

        <h4 class="m-t-0 header-title"><b>Daftar User</b></h4>
        <p class="text-muted font-13 m-b-30">
            Responsive is an extension for DataTables that resolves that problem by optimising the
            table's layout for different screen sizes through the dynamic insertion and removal of
            columns from the table.
        </p>

        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap">
            <thead>
                <tr>

                    <th>Nama</th>
                    <th>Username</th>
                    <th>Progres Materi</th>

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
                        <td><?= $user['progresMateri']; ?></td>

                    </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>
</div>