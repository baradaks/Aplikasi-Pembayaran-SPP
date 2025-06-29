<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_spp = $_POST['id_spp'];
$tahun = $_POST['tahun'];
$nominal = $_POST['nominal'];
  
// update data ke database
mysqli_query($koneksi,"update spp set id_spp='$id_spp', tahun='$tahun', nominal='$nominal' where id_spp='$id_spp'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>