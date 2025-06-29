<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Aplikasi-Pembayaran-Spp</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="../img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
</head>
<body>


	<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:../login_admin.php?pesan=gagal");
	}

	?>
<div class="container-fluid bg-dark">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center text-white">
                    <small><i class="fa fa-phone-alt mr-2"></i>0812 7930 6006</small>
                    <small class="px-3">|</small>
                    <small><i class="fa fa-envelope mr-2"></i>pembadarpane12@gmail.com</small>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-white pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-2">
            <a href="halaman_admin.php" class="navbar-brand ml-lg-2">
                <h3 class="m-0 text-uppercase text-primary"><i class="fa fa-book-reader mr-3"></i>SPP SEKOLAH</h3>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <a href="data_siswa/index.php" class="nav-item nav-link">Data Siswa</a>
                    <a href="data_petugas/index.php" class="nav-item nav-link">Data Petugas</a>
                    <a href="data_kelas/index.php" class="nav-item nav-link">Data Kelas</a>
                    <a href="data_spp/index.php" class="nav-item nav-link">Data Spp</a>
                    <a href="data_pembayaran/index.php" class="nav-item nav-link">Entry Pembayaran</a>
                    <a href="history_pembayaran/index.php" class="nav-item nav-link">History Pembayaran</a>
                    </div>
                </div>
                 <a href="../logout.php" class="btn btn-primary py-2 px-3 d-none d-lg-block">Logout</a>
                    </div>
            </div>
        </nav>
    </div>
<div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 50px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="../img/smksb.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Apa itu SPP ?</h6>
                        <h1 class="display-4">SPP SMK SITI BANUN</h1>
                    </div>
                    <p>Sumbangan Pembinaan Pendidikan (SPP) adalah iuran rutin setiap sekolah yang mewajibkan siswa-siswinya untuk membayar iuran tersebut setiap sebulan sekali. SPP salah satu bentuk kewajiban setiap siswa yang masih aktif di sekolah tersebut. Tujuan Pembayaran SPP adalah untuk menunjang segala kebutuhan dan kepentingan yang dapat mendukung proses belajar dan mengajar berjalan dengan baik.</p>

<?php
include '../koneksi.php';
$pembayaran = mysqli_query($koneksi,"SELECT * FROM pembayaran");
$jumlah_pembayaran = mysqli_num_rows($pembayaran);
// ----------
$petugas = mysqli_query($koneksi,"SELECT * FROM petugas");
$jumlah_petugas = mysqli_num_rows($petugas);
// ----------
$kelas = mysqli_query($koneksi,"SELECT * FROM kelas");
$jumlah_kelas = mysqli_num_rows($kelas);
// ----------
$siswa = mysqli_query($koneksi,"SELECT * FROM siswa");
$jumlah_siswa = mysqli_num_rows($siswa);
// ----------
$spp = mysqli_query($koneksi,"SELECT * FROM spp");
$jumlah_spp = mysqli_num_rows($spp);
?>
                    
                    <div class="row pt-1 mx-0">
                        <div class="col-2 px-0">
                            <div class="bg-success text-center p-2">
                                <p>
                                <h1 class="text-white" data-toggle="counter-up"><?php echo $jumlah_petugas; ?></h1>
                                <h6 class="text-uppercase text-white">Data<span class="d-block">Petugas</span></h6>
                            </div>
                        </div>
                        <div class="col-2 px-0">
                            <div class="bg-primary text-center p-2">
                                <p>
                                <h1 class="text-white" data-toggle="counter-up"><?php echo $jumlah_pembayaran; ?></h1>
                                <h6 class="text-uppercase text-white">Data<span class="d-block">Pembayaran</span></h6>
                            </div>
                        </div>
                        <div class="col-2 px-0">
                            <div class="bg-secondary text-center p-2">
                                <p>
                                <h1 class="text-white" data-toggle="counter-up"><?php echo $jumlah_kelas; ?></h1>
                                <h6 class="text-uppercase text-white">Data<span class="d-block">Kelas</span></h6>
                            </div>
                        </div>
                        <div class="col-2 px-0">
                            <div class="bg-warning text-center p-2">
                                <p>
                                <h1 class="text-white" data-toggle="counter-up"><?php echo $jumlah_siswa; ?></h1>
                                <h6 class="text-uppercase text-white">Data<span class="d-block">Siswa</span></h6>
                            </div>
                        </div>
                        <div class="col-2 px-0">
                            <div class="bg-info text-center p-2">
                                <p>
                                <h1 class="text-white" data-toggle="counter-up"><?php echo $jumlah_spp; ?></h1>
                                <h6 class="text-uppercase text-white">Data<span class="d-block">Spp</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="container-fluid bg-image py-5" style="margin: 90px 0;">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Tentang Spp !</h6>
                        <h1 class="display-5">Sumbangan Pembinaan Pendidikan</h1>
                    </div>
                    <p class="m-0">Sistem pembayaran dapat diartikan sebagai salah satu kegiatan atau usaha
untuk membantu, melayani, mengarahkan atau mengatur semua kegiatan di dalam
mencapai suatu tujuan. karena pembayaran merupakan unsur penting bagi sebuah
instansi maka di perlukan suatu sistem yang dapat mengelola sistem pembayaran
secara baik.</p>
                </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                </div>
            </div>
        </div>
    </div>
   <a href="#" class="btn btn-lg btn-primary rounded-0 btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/counterup/counterup.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
    
</body>
</html>