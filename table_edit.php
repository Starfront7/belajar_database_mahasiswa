<?php
    include "TampilanHeader.php";
    include "koneksi.php";
?>
<div class="container-fluid">

    <a type="button" href="index.php" class="btn btn-info">Tambah</a>
    <h3>Tabel Mahasiswa</h3>

    <table class="table table-dark">
        <thead>
            <tr>
                <th>No</th>
                <th>Nim</th>
                <th>Nama</th>
                <th>Tanggal</th>
                <th>Alamat</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php
        $no = 1;
        $sql = mysqli_query($conn, "SELECT * FROM mhs");
        while ($d = mysqli_fetch_array($sql)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nim']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['tgl_lahir']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td>
                    <a href="table_edit_mhs.php?nim=<?php echo $d['nim']; ?>">Edit</a> |
                    <a href="table_hapus_mhs.php?nim=<?php echo $d['nim']; ?>"
                        onclick="return confirm('Yakin mau hapus?')">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php
    include "TampilanFooter.php";
?>