<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_spp = $_POST['id_spp'];
$tahun = $_POST['tahun'];
$nominal = $_POST['nominal'];
 
// menginput data ke database
mysqli_query($koneksi, "INSERT INTO spp(id_spp,tahun,nominal) VALUES('$id_spp','$tahun','$nominal')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>