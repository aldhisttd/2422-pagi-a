<?php 

// echo $_GET['username'];

if(isset($_GET['btn-login'])){
    
    $user = $_GET['username'];
    $pass = $_GET['password'];

    echo "proses login";

}else{
    header('location:index.php'); 
}
