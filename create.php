<?php 
include "koneksi.php";

if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $alamat = $_POST['alamat'];

    $sql = "INSERT INTO mhs (nim, nama, tgl_lahir, alamat) 
            VALUES ('$nim', '$nama', '$tgl_lahir', '$alamat')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan";
    } else {
        echo "Error: " . $sql . $conn->error;
    }
}
?>