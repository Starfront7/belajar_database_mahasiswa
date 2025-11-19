<!DOCTYPE html>
<html lang="en">
<?php
    include "TampilanHeader.php";
    include "koneksi.php";
?>

<head>
    <title>Data Nilai siswa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <h3>Data Nilai siswa</h3>
    <form action="create3.php" method="POST">
        <label for="nim">NIM :</label>
        <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM" required>
        </div>

        <div class="form-group">
            <label for="kode_mk">Kode Mata kuliah :</label>
            <input type="text" class="form-control" id="kode_mk" name="kode_mk" placeholder="Masukkan NIM" required>
        </div>


        <div class="form-group">
            <label for="nilai">nilai :</label>
            <input type="text" class="form-control" id="nilai" name="nilai" required>
        </div>

        <div class="form-group">
            <label for="smt">Semester :</label>
            <input type="text" class="form-control" id="smt" name="smt" placeholder="Masukkan alamat" required>
        </div>
        <div class="form-group">
            <label for="thajar">Tahun ajar :</label>
            <input type="text" class="form-control" id="thajar" name="thajar" placeholder="Masukkan alamat" required>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
    </form>


    </div>
    </div>
</body>

</html>