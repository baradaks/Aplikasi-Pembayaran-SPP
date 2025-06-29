<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_kelas = $_POST['id_kelas'];
$nama_kelas = $_POST['nama_kelas'];
$kompetensi_keahlian = $_POST['kompetensi_keahlian'];
  
// update data ke database
mysqli_query($koneksi,"update kelas set id_kelas='$id_kelas', nama_kelas='$nama_kelas', kompetensi_keahlian='$kompetensi_keahlian' where id_kelas='$id_kelas'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>