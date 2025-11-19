<?php include "TampilanHeader.php"; 
include "koneksi.php";
$id = $_GET['nim'];
$sql = "SELECT * FROM mhs WHERE nim=$id";
$query = $conn->query($sql);
$d = $query->fetch_assoc();
?>
<div class="container-fluid">
    <h3>Data Mahasiswa</h3>
    <form action="table_upd.php" method="post" class="was-validated">
        <div class="form-group">

            <label>Nim:</label>
            <input type="text" class="form-control" placeholder="Enter username" name="nim"
                value="<?php echo $d['nim']; ?>">

        </div>

        <div class="form-group">
            <label>Nama Lengkap:</label>
            <input type="text" class="form-control" placeholder="Enter username" name="nama"
                value="<?php echo $d['nama']; ?>">

        </div>

        <div class="form-group">
            <label for="pwd">Tgl lahir</label>
            <input type="date" class="form-control" placeholder="Enter date" name="tgl_lahir"
                value="<?php echo $d['tgl_lahir']; ?>">

        </div>

        <div class="form-group">
            <label for="pwd">Alamat</label>
            <input type="text" class="form-control" placeholder="Enter username" name="alamat"
                value="<?php echo $d['alamat']; ?>">

        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>