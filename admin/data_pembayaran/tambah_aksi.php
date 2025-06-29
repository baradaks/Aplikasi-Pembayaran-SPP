<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_pembayaran = $_POST['id_pembayaran'];
$id_petugas = $_POST['id_petugas'];
$nisn = $_POST['nisn'];
$nama = $_POST['nama'];
$tgl_bayar = $_POST['tgl_bayar'];
$bulan_dibayar = $_POST['bulan_dibayar'];
$tahun_dibayar = $_POST['tahun_dibayar'];
$id_spp = $_POST['id_spp'];
$jumlah_bayar = $_POST['jumlah_bayar'];
 
// menginput data ke database
mysqli_query($koneksi, "INSERT INTO pembayaran(id_pembayaran,id_petugas,nisn,nama,tgl_bayar,bulan_dibayar,tahun_dibayar,id_spp,jumlah_bayar) VALUES('$id_pembayaran','$id_petugas','$nisn','$nama','$tgl_bayar','$bulan_dibayar','$tahun_dibayar','$id_spp','$jumlah_bayar')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>