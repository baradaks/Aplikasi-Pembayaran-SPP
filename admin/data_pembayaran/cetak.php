<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cetak-Pembayaran-SPP</title>
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
<br>
<br>
    <div class="card-body">
    <div class="table-bordered">
        <p>
<div class="col-md-12">
<div class="float-right">
</div>
    <center>
        <br>
        <h3>Data Pembayaran</h3>
        <br>
    </center>
<div class="card-body">
<table class="table table-bordered text-center text-black align-items-center">
        <tr>
            <th>Id Pembayaran</th>
            <th>Id Petugas</th>
            <th>Nisn</th>
            <th>Nama</th>
            <th>Tgl Bayar</th>
            <th>Bulan Dibayar</th>
            <th>Tahun Dibayar</th>
            <th>Id Spp</th>
            <th>Jumlah Bayar</th>
        </tr>
        <?php 
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi,"select * from pembayaran");
        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $d['id_pembayaran']; ?></td>
                <td><?php echo $d['id_petugas']; ?></td>
                <td><?php echo $d['nisn']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['tgl_bayar']; ?></td>
                <td><?php echo $d['bulan_dibayar']; ?></td>
                <td><?php echo $d['tahun_dibayar']; ?></td>
                <td><?php echo $d['id_spp']; ?></td>
                <td><?php echo $d['jumlah_bayar']; ?></td>
            </tr>
            <?php 
        }
        ?>
    </table>
    </body>
      <script>
        window.print();
    </script>
</html>