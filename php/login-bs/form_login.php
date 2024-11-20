<?php 
session_start();
if(isset($_SESSION['login'])){
    header('location:beranda.php');
    exit();
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-secondary">

    <div class="row align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="col-4 bg-light p-4">

            <div class="text-center">
                <img src="https://sttdumai.ac.id/assets/image/material/icon/logo.png" class="img-fluid" width="60">
                <h6>Sekolah Tinggi Teknologi Dumai</h6>
            </div>
            <hr>

            <?php 
            if(isset($_SESSION['msg_global'])){
                echo '
                    <div class="alert alert-danger" role="alert">
                        '.$_SESSION['msg_global'].'
                    </div>
                ';
            }
            ?>

            

            <form action="process/login.php" method="POST">
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input name="username" type="text" class="form-control <?= (isset($_SESSION['msg_user'])?"is-invalid":null) ?>" placeholder="ketik username anda">

                    <?php 
                    if(isset($_SESSION['msg_user'])){
                        echo '
                            <div class="invalid-feedback">
                                '.$_SESSION['msg_user'].'
                            </div>
                        ';
                    }
                    ?>
                    

                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input name="password" type="password" class="form-control <?= (isset($_SESSION['msg_pass'])?"is-invalid":null) ?>" placeholder="ketik password anda">

                    <?php 
                    if(isset($_SESSION['msg_pass'])){
                        echo '
                            <div class="invalid-feedback">
                                '.$_SESSION['msg_pass'].'
                            </div>
                        ';
                    }
                    ?>
                </div>
                <hr>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>


        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>

<?php 
session_destroy();
?>