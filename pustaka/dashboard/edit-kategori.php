<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Edit Kategori</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col">

        <div class="card">
            <div class="card-body">

                <div class="row">
                    <div class="col-6">

                        <?php
                        if (isset($_SESSION['error']['global'])) {
                            echo '
                                <div class="alert alert-danger" role="alert">
                                    '.$_SESSION['error']['global'].'
                                </div>
                            ';
                        }
                        ?>

                        <?php
                        if (isset($_SESSION['success']['global'])) {
                            echo '
                                <div class="alert alert-success" role="alert">
                                    '.$_SESSION['success']['global'].'
                                </div>
                            ';
                        }
                        ?>

                        <?php 
                        include "proses/koneksi.php";
                        $kode = $_REQUEST['kode'];
                        $query = "SELECT * FROM kategori WHERE kd_kategori='$kode'";
                        $q = mysqli_query($koneksi, $query);
                        $data = mysqli_fetch_array($q);
                        ?>


                        <form action="proses/proses-edit-kategori.php" method="POST">
                            <div class="form-group">
                                <label for="">Kode Kategori</label>
                                <input type="text" readonly value="<?= $data['kd_kategori'] ?>" name="kd_kategori" class="form-control">
                                <?php
                                if (isset($_SESSION['error']['kode'])) {
                                    echo '<p class="text-danger">' . $_SESSION['error']['kode'] . '</p>';
                                }
                                ?>
                            </div>

                            <div class="form-group">
                                <label for="">Nama Kategori</label>
                                <input type="text" value="<?= $data['nama_kategori'] ?>" name="nama_kategori" class="form-control">
                                <?php
                                if (isset($_SESSION['error']['nama'])) {
                                    echo '<p class="text-danger">' . $_SESSION['error']['nama'] . '</p>';
                                }
                                ?>
                            </div>

                            <div class="form-group">
                                <button type="submit" name="btn-submit" class="btn btn-primary">Update Kategori</button>
                            </div>
                        </form>


                    </div>
                </div>


            </div>
        </div>

    </div>
</div>