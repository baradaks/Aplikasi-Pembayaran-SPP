<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$nisn = $_POST['nisn'];
$nis = $_POST['nis'];

// menyeleksi data user dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from siswa where nisn='$nisn' and nis='$nis'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['nisn'] = $nisn;
	$_SESSION['nis'] = $nis;
	$_SESSION['nama'] = $nama;
	$_SESSION['status'] = "login";
	header("location:siswa/halaman_siswa.php");
}else{
	header("location:login.php?info=gagal");
}
?>