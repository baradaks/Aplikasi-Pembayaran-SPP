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
 
    <?php
    include 'koneksi.php';
    $id_pembayaran = $_GET['id_pembayaran'];
    $data = mysqli_query($koneksi,"select * from pembayaran where id_pembayaran='$id_pembayaran'");
    while($d = mysqli_fetch_array($data)){
        ?>
        <form method="post" action="update.php">
            <p>
<p>
<a href="index.php" class="btn btn-primary btn-sm "><i class="fas fa-chevron-circle-left" ></i> Kembali</a>
<p>
<p>
            <table class="table table-hover text-left text-black align-items-center">
                <tr>            
                    <td>Id Pembayaran</td>
                    <td><input type="number" name="id_pembayaran"class="form-control" value="<?php echo $d['id_pembayaran']; ?>"></td>
                </tr>
<?php
include "koneksi.php";
$query = "SELECT * FROM `petugas`";
$result1 = mysqli_query($koneksi, $query);
?>          
            <tr>
                <td>Id Petugas</td>
                <td><select name="id_petugas" class="form-control">
                <?php while($row1 = mysqli_fetch_array($result1)):;?>
                <option value="<?php echo $row1[0];?>"><?php echo $row1[0];?></option>
                <?php endwhile;?>
                </select>
            </td>
            </tr>
            <tr>            
                    <td>Nisn</td>
                    <td><input type="number" name="nisn"class="form-control" value="<?php echo $d['nisn']; ?>" disabled></td>
                </tr>
                <tr>            
                    <td>Nama</td>
                    <td><input type="nama" name="nisn"class="form-control" value="<?php echo $d['nama']; ?>" disabled></td>
                </tr>
                <tr>
                    <td>Tgl Bayar</td>
                    <td><input type="date" name="tgl_bayar"class="form-control" value="<?php echo $d['tgl_bayar']; ?>"></td>
                </tr>
                <tr>
                    <td>Bulan Dibayar</td>
                <td><select name="bulan_dibayar" class="form-control">
                    <option value="">-- Pilih Bulan --</option>
                    <option value="Januari">Januari</option>
                    <option value="Februari">Februari</option>
                    <option value="Maret">Maret</option>
                    <option value="April">April</option>
                    <option value="Mei">Mei</option>
                    <option value="Juni">Juni</option>
                    <option value="Juli">Juli</option>
                    <option value="Agustus">Agustus</option>
                    <option value="September">September</option>
                    <option value="Oktober">Oktober</option>
                    <option value="November">November</option>
                    <option value="Desember">Desember</option class="form-control" value="<?php echo $d['bulan_dibayar']; ?>"></td>
                </tr>
                <tr>
<?php
include "koneksi.php";
$query = "SELECT * FROM `spp`";
$result1 = mysqli_query($koneksi, $query);
?>          
                <tr>
                    <td>Tahun</td>
                    <td><select name="tahun_dibayar" class="form-control">
                    <?php while($row1 = mysqli_fetch_array($result1)):;?>
                    <option value="<?php echo $row1[1];?>"><?php echo $row1[1];?></option>
                    <?php endwhile;?>
                    </select>
                </td>
                </tr>
                <?php
include "koneksi.php";
$query = "SELECT * FROM `spp`";
$result1 = mysqli_query($koneksi, $query);
?>          
            <tr>
                <td>Id Spp</td>
                <td><select name="id_spp" class="form-control">
                <?php while($row1 = mysqli_fetch_array($result1)):;?>
                <option value="<?php echo $row1[0];?>"><?php echo $row1[0];?></option>
                <?php endwhile;?>
                </select>
            </td>
            </tr>
                <tr>
                    <td>Jumlah  Bayar</td>
                    <td><input type="number" name="jumlah_bayar"class="form-control" value="<?php echo $d['jumlah_bayar']; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="submit" name="filter" value="true" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button></td>
                </tr>       
            </table>
        </form>
        <?php 
    }
    ?>
 
</body>
</html>