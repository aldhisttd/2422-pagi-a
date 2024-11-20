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
    header('location:../form_login.php');
    exit();
}

//validasi data login benar/tidak
// koneksi ke DB
$koneksi = mysqli_connect('localhost', 'root', '', '2024sem5_pagia');

// cek apakah ada username dan password di db

$sql = "SELECT password FROM users WHERE username='$user_form'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($query);
$password_db = $data['password'];

$sql = "SELECT * FROM `users` WHERE username='$user_form'";
$query = mysqli_query($koneksi, $sql);
$numRow = mysqli_num_rows($query);

if($numRow==0 || !password_verify($pass_form, $password_db)){
    $_SESSION['msg_global'] = "Data login tidak valid.";
    header('location:../form_login.php');
    exit();
} 

// proses login

$_SESSION['user_login'] = $user_form;
$_SESSION['login'] = true;
header('location:../beranda.php');
