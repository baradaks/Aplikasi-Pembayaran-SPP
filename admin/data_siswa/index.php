<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Data-Siswa</title>
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
                    <a href="#" class="nav-item nav-link active">Data Siswa</a>
                    <a href="../data_petugas/index.php" class="nav-item nav-link">Data Petugas</a>
                    <a href="../data_kelas/index.php" class="nav-item nav-link">Data Kelas</a>
                    <a href="../data_spp/index.php" class="nav-item nav-link">Data Spp</a>
                    <a href="../data_pembayaran/index.php" class="nav-item nav-link">Entry Pembayaran</a>
                   <a href="../history_pembayaran/index.php" class="nav-item nav-link">History Pembayaran</a>
                </div>
            </div>
                <a href="../../logout.php" class="btn btn-primary py-2 px-3 d-none d-lg-block">Logout</a>
            </div>
        </nav>
    </div>  
<p>
<br>
<br>
<div class="card-body">
    <div class="table-bordered">
        <p>
<div class="col-md-12">
<div class="float-right">
</div>
<div>
<a href="tambah.php" class="btn btn-primary btn-sm"><i class="fas fa-plus-circle" ></i> TAMBAH SISWA</a>
    <input type="text" id="search" class="form-control mt-3 mb-3" placeholder="Search name...">
</div>
<p>
<p>
 <table class="table table-hover text-center text-black align-items-center">
		<tr class="bg-light">
			<th>No</th>
			<th>Nisn</th>
			<th>Nis</th>
			<th>Nama</th>
			<th>Id Kelas</th>
			<th>Alamat</th>
			<th>No Telepon</th>
			<th>Id SPP</th>
			<th colspan="1">Aksi</th>
		</tr>
        <tbody id="tampil">
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from siswa INNER JOIN kelas ON siswa.id_kelas=kelas.id_kelas");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nisn']; ?></td>
				<td><?php echo $d['nis']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['id_kelas']; ?> -- <?php echo $d['nama_kelas']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td><?php echo $d['no_telp']; ?></td>
				<td><?php echo $d['id_spp']; ?></td>
				<td>
					<a href="edit.php?nisn=<?php echo $d['nisn']; ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
					<a href="hapus.php?nisn=<?php echo $d['nisn']; ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
				</td>
			</tr>
             </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
			<?php 
		}
		?>
	</table>
    <script src="jquery.min.js" charset="utf-8"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#search').on('keyup', function() {
                $.ajax({
                    type: 'POST',
                    url: 'search.php',
                    data: {
                        search: $(this).val()
                    },
                    cache: false,
                    success: function(data) {
                        $('#tampil').html(data);
                    }
                });
            });
        });
    </script>
</div>
	</body>
</html>