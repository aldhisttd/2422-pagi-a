<?php 

session_start();
echo $_SESSION['nama'];

session_destroy();
//unset($_SESSION['nama']); menghapus spesifik sesi