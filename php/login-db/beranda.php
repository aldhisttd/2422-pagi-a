<?php 
session_start();
if(!isset($_SESSION['login'])){
    header('location:form_login.php');
    exit();
}

?>

<h1>Selamat datang di beranda, <?= $_SESSION['user_login'] ?></h1>

<a href="process/logout.php">Logout</a>