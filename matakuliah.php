<!DOCTYPE html>
<html lang="en">
<?php
    include "TampilanHeader.php";
    include "koneksi.php";
?>

<head>
    <title>Data matakuliah</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <h3>Data Mata kuliah</h3>
    <form action="create2.php" method="POST">
        <div class="form-group">
            <?php  
include "koneksi.php";

// ambil kode_mk terbesar
$cari_kd = mysqli_query($conn, "SELECT MAX(kode_mk) AS kode_mk FROM mata_kuliah");
$tm_cari  = mysqli_fetch_array($cari_kd);

$kode = (int) substr($tm_cari['kode_mk'], -3); 
$tambah = $kode + 1;

// format 3 digit
$id = "10" . str_pad($tambah, 2, "0", STR_PAD_LEFT);
?>


            <label for="kode_mk">Kode Mata kuliah :</label>
            <input type="text" class="form-control" id="kode_mk" name="kode_mk" value="<?php  echo $id;  ?>"
                placeholder="Masukkan NIM" required>
        </div>

        <div class="form-group">
            <label for="nama_mk">Nama Mata kuliah :</label>
            <input type="text" class="form-control" id="nama_mk" name="nama_mk" placeholder="Masukkan nama lengkap"
                required>
        </div>

        <div class="form-group">
            <label for="pwd">Sks</label>
            <select class="form-control" name="sks" required>
                <option value="">Pilih SKS</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
            </select>
        </div>

        <div class="form-group">
            <label for="smt">Semester :</label>
            <input type="text" class="form-control" id="smt" name="smt" placeholder="Masukkan alamat" required>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
    </form>


    </div>
    </div>
</body>

</html>