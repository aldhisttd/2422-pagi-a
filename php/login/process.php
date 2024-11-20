<?php 
session_start();
//ambil username & password
$user_form = $_POST['username'];
$pass_form = $_POST['password'];
//cek apakah username & password tidak kosong
//jika username atau password isi nya kosong
if($user_form==''){
    $_SESSION['msg_user'] = "Username tidak boleh kosong";
}

if($pass_form==''){
    $_SESSION['msg_pass'] = "Password tidak boleh kosong";
}

if(isset($_SESSION['msg_user'])||isset($_SESSION['msg_pass'])){
    header('location:form_login.php');
    exit();
}

//validasi data login benar/tidak
if($user_form!='admin' || $pass_form!='123'){
    $_SESSION['msg_global'] = "Data login tidak valid.";
    header('location:form_login.php');
    exit();
} 

// proses login
$_SESSION['login'] = true;
header('location:beranda.php');
