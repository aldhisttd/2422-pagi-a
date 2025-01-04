<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Data Kategori</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col">

        <div class="card">
            <div class="card-body">

                <?php
                if (isset($_SESSION['success']['global'])) {
                    echo '
                        <div class="alert alert-success" role="alert">
                            ' . $_SESSION['success']['global'] . '
                        </div>
                    ';
                }
                ?>
                <div class="table-responsive">

                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <form action="proses/proses-hapus-kategori.php" method="POST">

                            <?php
                            include "proses/koneksi.php";
                            $query = "SELECT * FROM kategori";
                            $q = mysqli_query($koneksi, $query);
                            $no = 1;
                            while ($data = mysqli_fetch_array($q)) {
                            ?>
                                <tr>
                                    <th scope="row"><?= $no ?></th>
                                    <td><?= $data['kd_kategori'] ?></td>
                                    <td><?= $data['nama_kategori'] ?></td>
                                    <td>
                                        <div class="btn-group mb-2">
                                            <a href="?page=edit-kategori&kode=<?= $data['kd_kategori'] ?>" type="button" class="btn btn-primary waves-effect">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>

                                            
                                                <button onclick="return confirm('Anda yakin mau menghapus data ini?')" type="submit" name="btn-hapus" value="<?= $data['kd_kategori'] ?>" class="btn btn-danger waves-effect">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            
                                        </div>
                                    </td>
                                </tr>
                            <?php
                                $no++;
                            }
                            ?>


                        </form>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </div>
</div>