<?php
    if (isset($_POST['search'])) {
        require_once 'koneksi.php';

        $no = 1;
        $search = $_POST['search'];

        $query = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nisn LIKE '%" . $search . "%' OR nisn LIKE '%" . $search . "%' OR nis LIKE '%" . $search . "%' OR nama LIKE '%" . $search . "%' OR id_kelas LIKE '%" . $search . "%' OR alamat LIKE '%" . $search . "%' OR no_telp LIKE '%" . $search . "%' OR id_spp LIKE '%" . $search . "%'");
        while ($d = mysqli_fetch_array($query)) {
?>
        <tr>
            <td><?php echo $no++; ?></td>
                <td><?php echo $d['nisn']; ?></td>
                <td><?php echo $d['nis']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['id_kelas']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['no_telp']; ?></td>
                <td><?php echo $d['id_spp']; ?></td>
                <td>
                <a href="edit.php?nisn=<?php echo $d['nisn']; ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                    <a href="hapus.php?nisn=<?php echo $d['nisn']; ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
<?php }
} ?>