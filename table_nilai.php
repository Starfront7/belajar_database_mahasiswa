<?php
    include "TampilanHeader.php";
    include "koneksi.php";
?>
<div class="container-fluid">

    <a type="button" href="mahasiswa.php" class="btn btn-info">Tambah</a>
    <h3>Tabel Matakuliah</h3>

    <table class="table table-dark">
        <thead>
            <tr>
                <th>No</th>
                <th>nim</th>
                <th>kode mk</th>
                <th>nilai</th>
                <th>smt</th>
                <th>tahun_ajar</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php
        $no = 1;
        $sql = mysqli_query($conn, "SELECT * FROM  ambil_mk");
        while ($d = mysqli_fetch_array($sql)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nim']; ?></td>
                <td><?php echo $d['kode_mk']; ?></td>
                <td><?php echo $d['nilai']; ?></td>
                <td><?php echo $d['smt']; ?></td>
                <td><?php echo $d['thajar']; ?></td>
                <td>
                    <a href="table_edit_nilai.php?kode_mk=<?php echo $d['kode_mk']; ?>">Edit</a> |
                    <a href="table_hapus_nilai.php?kode_mk=<?php echo $d['kode_mk']; ?>"
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