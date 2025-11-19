<?php include "tampilanheader.php"; 
include "koneksi.php";
$id = $_GET['kode_mk'];
$sql = "SELECT * FROM ambil_mk WHERE kode_mk='$id'";
$query = $conn->query($sql);
$d = $query->fetch_assoc();
?>
<div class="container-fluid">
    <h3>Data Mata Kuliah</h3>
    <form action="table_upd_nilai.php" method="post" class="was-validated">
        <div class="form-group">

            <label>Nim</label>
            <input type="text" class="form-control" placeholder="Enter username" name="nim"
                value="<?php echo $d['nim']; ?>">

        </div>

        <div class="form-group">

            <label>Kode MK:</label>
            <input type="text" class="form-control" placeholder="Enter username" name="kode_mk"
                value="<?php echo $d['kode_mk']; ?>">

        </div>

        <div class="form-group">
            <label for="pwd">nilai</label>
            <input type="number" class="form-control" placeholder="Enter number" name="Nilai"
                value="<?php echo $d['nilai']; ?>">

        </div>

        <div class="form-group">
            <label for="pwd">Smt</label>
            <input type="text" class="form-control" placeholder="Enter username" name="smt"
                value="<?php echo $d['smt']; ?>">

        </div>
        <div class="form-group">

            <label>tahun ajar</label>
            <input type="text" class="form-control" placeholder="Enter username" name="thajar"
                value="<?php echo $d['thajar']; ?>">

        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>