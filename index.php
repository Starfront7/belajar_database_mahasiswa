<?php
include "tampilanheader.php"; ?>
<div class="container-fluid mt-3">
    <h3>Data Mahasiswa</h3>
    <form action="create.php" method="POST">
        <div class="form-group">
            <label for="nim">NIM :</label>
            <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM" required>
        </div>

        <div class="form-group">
            <label for="nama">Nama Lengkap :</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>
        </div>

        <div class="form-group">
            <label for="tgl_lahir">Tanggal Lahir :</label>
            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat :</label>
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat" required>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
    </form>


</div>
</div>