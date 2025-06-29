<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_petugas = $_POST['id_petugas'];
$username = $_POST['username'];
$password = $_POST['password'];
$nama_petugas = $_POST['nama_petugas'];
$level = $_POST['level'];
 
// menginput data ke database
mysqli_query($koneksi, "INSERT INTO petugas(id_petugas,username,password,nama_petugas,level) VALUES('$id_petugas','$username','$password','$nama_petugas','$level')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>