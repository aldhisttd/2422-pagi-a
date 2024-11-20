<?php 
session_start();
//ambil username & password
$user_form = $_POST['username'];
$pass_form = $_POST['password'];
$pass_conf_form = $_POST['password_confirmation'];
//cek apakah username & password tidak kosong
//jika username atau password isi nya kosong
if($user_form==''){
    $_SESSION['msg_user'] = "Username tidak boleh kosong";
}

if($pass_form==''){
    $_SESSION['msg_pass'] = "Password tidak boleh kosong";
}

if($pass_conf_form==''){
    $_SESSION['msg_pass_conf'] = "Confirmation Password tidak boleh kosong";
}

if(
    isset($_SESSION['msg_user'])||
    isset($_SESSION['msg_pass'])||
    isset($_SESSION['msg_pass_conf'])
){
    header('location:../form_register.php');
    exit();
}

if($pass_form != $pass_conf_form){
    $_SESSION['user_cache'] = $user_form; 
    $_SESSION['msg_pass_conf'] = "Confirmation Password tidak sama  ";
    header('location:../form_register.php');
    exit();
}

$koneksi = mysqli_connect('localhost', 'root', '', '2024sem5_pagia');
$sql = "SELECT * FROM users WHERE username='$user_form'";
$query = mysqli_query($koneksi, $sql);
$numRow = mysqli_num_rows($query);

if($numRow>0){
    $_SESSION['user_cache'] = $user_form;
    $_SESSION['msg_global'] = "Username sudah terdaftar, silahkan ganti.";
    header('location:../form_register.php');
    exit();
}

// register
$pass_enc = password_hash($pass_form, PASSWORD_DEFAULT);
$sql = "INSERT INTO `users` (`id`, `username`, `password`) VALUES (NULL, '$user_form', '$pass_enc')";
mysqli_query($koneksi, $sql);

$_SESSION['msg_global_success'] = "Registrasi berhasil, silahkan melakukan login.";
header('location:../form_register.php');

// proses login
// $_SESSION['login'] = true;
// header('location:../beranda.php');
