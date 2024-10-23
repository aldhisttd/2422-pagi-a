<?php 
if(!isset($_POST['btn-login'])){
    header('location:index.php'); 
}

$user = $_POST['username'];
$pass = $_POST['password'];

echo "proses login";