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
}

echo "proses login";
    //tampilkan notif di halaman login
//jika usernam dan password tidak kosong
    //cek apakah username & password benar
        //jika benar antarkan ke halaman beranda
        //jika tidak benar tampilkan notif di halaman login

