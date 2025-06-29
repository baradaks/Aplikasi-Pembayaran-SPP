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
	$id_spp = $_GET['id_spp'];
	$data = mysqli_query($koneksi,"select * from spp where id_spp='$id_spp'");
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
					<td>Id Spp</td>
					<td>
						<input type="number" name="id_spp" class="form-control" value="<?php echo $d['id_spp']; ?>">
					</td>
				</tr>
				<tr>
					<td>Tahun</td>
					<td><input type="text" name="tahun" class="form-control" value="<?php echo $d['tahun']; ?>"></td>
				</tr>
				<tr>
					<td>Nominal</td>
					<td><input type="text" name="nominal" class="form-control" value="<?php echo $d['nominal']; ?>"></td>
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