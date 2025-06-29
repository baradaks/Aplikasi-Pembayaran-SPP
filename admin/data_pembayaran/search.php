<?php
    if (isset($_POST['search'])) {
        require_once 'koneksi.php';

        $no = 1;
        $search = $_POST['search'];

        $query = mysqli_query($koneksi, "SELECT * FROM pembayaran  WHERE id_pembayaran LIKE '%" . $search . "%' OR id_petugas LIKE '%" . $search . "%' OR nisn LIKE '%" . $search . "%' OR nama LIKE '%" . $search . "%' OR tgl_bayar LIKE '%" . $search . "%' OR bulan_dibayar LIKE '%" . $search . "%' OR tahun_dibayar LIKE '%" . $search . "%' OR id_spp LIKE '%" . $search . "%' OR jumlah_bayar LIKE '%" . $search . "%'");
        while ($d = mysqli_fetch_array($query)) {
?>
        <tr>
            <td><?php echo $no++; ?></td>
                <td><?php echo $d['id_pembayaran']; ?></td>
                <td><?php echo $d['id_petugas']; ?></td>
                <td><?php echo $d['nisn']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['tgl_bayar']; ?></td>
                <td><?php echo $d['bulan_dibayar']; ?></td>
                <td><?php echo $d['tahun_dibayar']; ?></td>
                <td><?php echo $d['id_spp']; ?></td>
                <td><?php echo $d['jumlah_bayar']; ?></td>
                <td>
                <a href="edit.php?id_pembayaran=<?php echo $d['id_pembayaran']; ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                    <a href="hapus.php?id_pembayaran=<?php echo $d['id_pembayaran']; ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
<?php }
} ?>