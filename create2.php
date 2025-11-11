<?php 
include "koneksi.php";

if (isset($_POST['Submit'])) {
    $kode_mk = $_POST['kode_mk'];
    $nama_mk = $_POST['nama_mk'];
    $sks = $_POST['sks'];
    $smt = $_POST['smt'];

    $sqli = "INSERT INTO `mata_kuliah`(`kode_mk`, `nama_mk`, `sks`, `smt`) 
    VALUES ('$kode_mk','$nama_mk','$sks','$smt')";

    if ($conn->query($sqli) === TRUE) {
        echo "Data berhasil disimpan";
    } else {
        echo "Error: " . $sqli . $conn->error;
    }
}
?>