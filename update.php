<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$no_henphone = $_POST['no_henphone'];
$alamat = $_POST['alamat'];
 
// update data ke database
mysqli_query($koneksi,"update pendaftar set nama='$nama', no_henphone='$no_henphone', alamat='$alamat' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>