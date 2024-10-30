<?php 

session_start();

if(isset($_SESSION['login'])){
    header('beranda.php');
    exit();
}

header('location:form_login.php');