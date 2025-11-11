<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data mahasiswa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand-sm bg-light">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mahasiswa.php">Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="matakuliah.php">Mata-kuliah</a>
                </li>
            </ul>
        </div>
    </nav>
    <h3>Data Mata kuliah</h3>
    <form action="create2.php" method="POST">
        <div class="form-group">
            <label for="kode_mk">Kode Mata kuliah :</label>
            <input type="text" class="form-control" id="kode_mk" name="kode_mk" placeholder="Masukkan NIM" required>
        </div>

        <div class="form-group">
            <label for="nama_mk">Nama Mata kuliah :</label>
            <input type="text" class="form-control" id="nama_mk" name="nama_mk" placeholder="Masukkan nama lengkap"
                required>
        </div>

        <div class="form-group">
            <label for="sks">sks :</label>
            <input type="text" class="form-control" id="sks" name="sks" required>
        </div>

        <div class="form-group">
            <label for="smt">Semester :</label>
            <input type="text" class="form-control" id="smt" name="smt" placeholder="Masukkan alamat" required>
        </div>

        <button type="submit" name="Submit" class="btn btn-primary">Simpan</button>
    </form>


    </div>
    </div>
</body>

</html>