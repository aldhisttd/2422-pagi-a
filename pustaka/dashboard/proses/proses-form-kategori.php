<?php 

if(!isset($_POST['btn-submit'])){
    header('location:../?page=form-kategori');
    exit();
}

$kode = $_POST['kd_kategori'];
$nama = $_POST['nama_kategori'];

session_start();
// Validasi kosong

if($kode == ''){
    $_SESSION['error']['kode'] = "Kode tidak boleh kosong";
}

if($nama == ''){
    $_SESSION['error']['nama'] = "Nama tidak boleh kosong";
}

if(isset($_SESSION['error']['nama']) || isset($_SESSION['error']['kode'])){
    header('location:../?page=form-kategori');
    exit();
}

// validasi duplikat
include "koneksi.php";
$query = "SELECT * FROM kategori WHERE kd_kategori='$kode' OR nama_kategori = '$nama'";
$q = mysqli_query($koneksi, $query);

if(mysqli_num_rows($q)!=0){
    $_SESSION['error']['global'] = "Data kategori sudah ada di database";
    header('location:../?page=form-kategori');
    exit();
}

$query = "INSERT INTO kategori VALUES('$kode','$nama')";
$q = mysqli_query($koneksi, $query);
$_SESSION['success']['global'] = "Data kategori berhasil di simpan";
header('location:../?page=form-kategori');
exit();