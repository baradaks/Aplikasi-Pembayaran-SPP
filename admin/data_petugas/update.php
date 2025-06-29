<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_petugas = $_POST['id_petugas'];
$username = $_POST['username'];
$password = $_POST['password'];
$nama_petugas = $_POST['nama_petugas'];
$level = $_POST['level'];
  
// update data ke database
mysqli_query($koneksi,"update petugas set id_petugas='$id_petugas', username='$username', password='$password', nama_petugas='$nama_petugas', level='$level' where id_petugas='$id_petugas'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>