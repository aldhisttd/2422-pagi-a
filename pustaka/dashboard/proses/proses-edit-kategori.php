<?php 

if(!isset($_POST['btn-submit'])){
    header('location:../?page=data-kategori');
    exit();
}

$kode = $_POST['kd_kategori'];
$nama = $_POST['nama_kategori'];

session_start();
// Validasi kosong

if($nama == ''){
    $_SESSION['error']['nama'] = "Nama tidak boleh kosong";
    header('location:../?page=edit-kategori&kode='.$kode);
    exit();
}
// validasi duplikat
include "koneksi.php";
$query = "SELECT * FROM kategori WHERE nama_kategori = '$nama' AND kd_kategori != '$kode'";
$q = mysqli_query($koneksi, $query);
if(mysqli_num_rows($q)!=0){
    $_SESSION['error']['global'] = "Nama kategori sudah ada di database";
    header('location:../?page=edit-kategori&kode='.$kode);
    exit();
}

$query = "UPDATE kategori SET nama_kategori='$nama' WHERE kd_kategori='$kode'";
$q = mysqli_query($koneksi, $query);
$_SESSION['success']['global'] = "Data kategori berhasil di edit";
header('location:../?page=data-kategori');
exit();