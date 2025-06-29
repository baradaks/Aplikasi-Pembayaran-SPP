<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Aplikasi-Pembayaran-SPP</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="../../img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../../css/style.css" rel="stylesheet">
</head>
<body>

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
            <a href="../halaman_admin.php" class="navbar-brand ml-lg-2">
                <h3 class="m-0 text-uppercase text-primary"><i class="fa fa-book-reader mr-3"></i>SPP SEKOLAH</h3>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <a href="../halaman_admin.php" class="nav-item nav-link">Home</a>
                    <a href="../data_siswa/index.php" class="nav-item nav-link">Data Siswa</a>
                    <a href="../data_petugas/index.php" class="nav-item nav-link">Data Petugas</a>
                    <a href="../data_kelas/index.php" class="nav-item nav-link">Data Kelas</a>
                    <a href="../data_spp/index.php" class="nav-item nav-link">Data Spp</a>
                    <a href="../data_pembayaran/index.php" class="nav-item nav-link">Entry Pembayaran</a>
                    <a href="history_pembayaran/histori_pembayaran.php" class="nav-item nav-link active">History Pembayaran</a>
                </div>
            </div>
                <a href="../../logout.php" class="btn btn-primary py-2 px-4 d-none d-lg-block">Logout</a>
            </div>
        </nav>
    </div>

  <!-- Main content -->
<br>
<br>
<a href="index.php" class="btn btn-primary btn-sm "><i class="fas fa-chevron-circle-left" ></i> Kembali</a>
       
              <?php 
              include "koneksi.php";
              $nisn = $_GET['nisn'];
              $mysqli_query = mysqli_query($koneksi, "SELECT * FROM siswa INNER JOIN kelas ON siswa.id_kelas=kelas.id_kelas where nisn='$nisn'");
              while($data_siswa = mysqli_fetch_array($mysqli_query)){
                ?>
                <div class="card-body">
    <div class="table-bordered">
        <p>
<div class="col-md-12">
<div class="float-right">
</div>
               <div class="col-sm-12 text-center">
                  <h5><b>Nama Siswa : <?=$data_siswa['nama']?></b></h5>
                  <h5><b>Kelas : <?=$data_siswa['nama_kelas']?></b></h5>
                  <p>
                </div>
              <?php } ?>
              <table class="table table-hover text-center text-black align-items-center">
                  <tr class="bg-light">
                    <th>Tanggal Bayar</th>
                    <th>Bulan</th>
                    <th>Tahun</th>
                    <th>Nominal Spp</th>
                    <th>Bayaran Masuk</th>
                  </tr>
                  <?php 
                  include "koneksi.php";
                  $nisn = $_GET['nisn'];
                  $mysqli_query = mysqli_query($koneksi, "SELECT * FROM pembayaran JOIN siswa ON pembayaran.nisn=siswa.nisn INNER JOIN spp ON pembayaran.id_spp=spp.id_spp");
                  $no = 1;
                  while($data = mysqli_fetch_array($mysqli_query)){
                    ?>
                    <tr>
                      <?php if ($nisn == $data['nisn']) { ?>
                       <td><?=$data['tgl_bayar']?></td>
                       <td><?=$data['bulan_dibayar']?></td>
                       <td><?=$data['tahun_dibayar']?></td>
                       <td>Rp. <?= number_format($data['nominal'])?></td>
                       <td>Rp. <?= number_format($data['jumlah_bayar'])?></td>                       
                     <?php } else { ?>
                     <?php } ?>

                   </tr>                   
                 <?php } ?>
                 <?php
                 $no = 1;
                 include "koneksi.php";
                 $siswa    =mysqli_query($koneksi, "SELECT * FROM siswa INNER JOIN kelas ON siswa.id_kelas=kelas.id_kelas INNER JOIN spp ON siswa.id_spp=spp.id_spp");
                 while($d_siswa = mysqli_fetch_array($siswa)){
                  $data_pembayaran = mysqli_query($koneksi, "select SUM(jumlah_bayar) as jumlah_bayar FROM pembayaran where nisn='$d_siswa[nisn]'");
                  $data_pembayaran = mysqli_fetch_array($data_pembayaran);
                  $sudah_bayar = $data_pembayaran['jumlah_bayar'];
                  $kekurangan = $d_siswa['nominal']-$data_pembayaran['jumlah_bayar'];
                  ?>
                <?php } ?>
              </tbody>
            </table>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
<!-- /.content-->
</div>
<!-- /.content-wrapper -->