<?php 
session_start();
if(!isset($_POST['btn-hapus'])){
    header('location:../?page=data-kategori');
    exit();
}

$kode = $_POST['btn-hapus'];

include "koneksi.php";
$query = "DELETE FROM kategori WHERE kd_kategori='$kode'";
mysqli_query($koneksi, $query);
$_SESSION['success']['global'] = "Data berhasil di hapus";
header('location:../?page=data-kategori');
exit();
