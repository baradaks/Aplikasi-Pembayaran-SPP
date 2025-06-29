<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Aplikasi-Pembayaran-SPP</title>
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


	<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:login.php?pesan=gagal");
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
            <a href="halaman_petugas.php" class="navbar-brand ml-lg-2">
                <h3 class="m-0 text-uppercase text-primary"><i class="fa fa-book-reader mr-3"></i>SPP SEKOLAH</h3>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <a href="#" class="nav-item nav-link active">Home</a>
                    <a href="data_pembayaran/index.php" class="nav-item nav-link">Entry Pembayaran</a>
                    <a href="history_pembayaran/index.php" class="nav-item nav-link">History Pembayaran</a>
                </div>
                <a href="../logout.php" class="btn btn-primary py-2 px-3 d-none d-lg-block">Logout</a>
            </div>
        </nav>
    </div>
<div class="container-fluid bg-image py-8" style="margin: 50px 0;">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Tentang Spp</h6>
                        <h1 class="display-5">Sumbangan Pembinaan Pendidikan</h1>
                    </div>
                    <p class="m-0">Sumbangan Pembinaan Pendidikan (SPP) adalah iuran rutin setiap sekolah yang mewajibkan siswa-siswinya untuk membayar iuran tersebut setiap sebulan sekali. SPP salah satu bentuk kewajiban setiap siswa yang masih aktif di sekolah tersebut. Tujuan Pembayaran SPP adalah untuk menunjang segala kebutuhan dan kepentingan yang dapat mendukung proses belajar dan mengajar berjalan dengan baik.</p>
                </div>
                <div class="col-lg-7">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="bg-white p-5">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <p>Sistem pembayaran dapat diartikan sebagai salah satu kegiatan atau usaha
untuk membantu, melayani, mengarahkan atau mengatur semua kegiatan di dalam
mencapai suatu tujuan. karena pembayaran merupakan unsur penting bagi sebuah
instansi maka di perlukan suatu sistem yang dapat mengelola sistem pembayaran
secara baik.</p>

                            <div class="d-flex flex-shrink-0 align-items-center mt-4">
                                <div>
                                    <h5>Petugas <?php echo $_SESSION['username']; ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <a href="#" class="btn btn-lg btn-primary rounded-0 btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>
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