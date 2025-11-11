<?php 
include "koneksi.php";

if (isset($_POST['SUbmit'])) {
    $nim = $_POST['nim']; 
    $kode_mk = $_POST['kode_mk'];
    $nilai = $_POST['nilai'];
    $smt = $_POST['smt'];
    $thajar = $_POST['thajar'];

    $sqlii = "INSERT INTO `ambil_mk`(`nim`, `kode_mk`, `nilai`, `smt`, `thajar`) 
    VALUES ('$nim','$kode_mk','$nilai','$smt','$thajar')";

    if ($conn->query($sqlii) === TRUE) {
        echo "Data berhasil disimpan";
    } else {
        echo "Error: " . $sqlii . $conn->error;
    }
}
?>