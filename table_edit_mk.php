<?php include "tampilanheader.php"; 
include "koneksi.php";
$id = $_GET['kode_mk'];
$sql = "SELECT * FROM mata_kuliah WHERE kode_mk='$id'";
$query = $conn->query($sql);
$d = $query->fetch_assoc();
?>
<div class="container-fluid">
    <h3>Data Mata Kuliah</h3>
    <form action="table_upd_mk.php" method="post" class="was-validated">
        <div class="form-group">

            <label>Kode MK:</label>
            <input type="text" class="form-control" placeholder="Enter username" name="kode_mk"
                value="<?php echo $d['kode_mk']; ?>">

        </div>

        <div class="form-group">
            <label>Nama MK:</label>
            <input type="text" class="form-control" placeholder="Enter username" name="nama_mk"
                value="<?php echo $d['nama_mk']; ?>">

        </div>

        <div class="form-group">
            <label for="pwd">Sks</label>
            <input type="number" class="form-control" placeholder="Enter number" name="sks"
                value="<?php echo $d['sks']; ?>">

        </div>

        <div class="form-group">
            <label for="pwd">Smt</label>
            <input type="text" class="form-control" placeholder="Enter username" name="smt"
                value="<?php echo $d['smt']; ?>">

        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>