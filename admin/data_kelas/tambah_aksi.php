<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_kelas = $_POST['id_kelas'];
$nama_kelas = $_POST['nama_kelas'];
$kompetensi_keahlian = $_POST['kompetensi_keahlian'];
 
// menginput data ke database
mysqli_query($koneksi, "INSERT INTO kelas(id_kelas,nama_kelas,kompetensi_keahlian) VALUES('$id_kelas','$nama_kelas','$kompetensi_keahlian')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>