<?php 
// koneksi database
include 'koneksi.php';
 

$nama = $_POST['nama'];
$no_henphone = $_POST['no_henphone'];
$alamat = $_POST['alamat'];
 if (!empty($nama) || !empty($no_henphone) || !empty($alamat)) {
// menginput data ke database
mysqli_query($koneksi,"insert into keluarga values('','$nama','$no_henphone','$alamat')");
 }
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>