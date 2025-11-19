<?php 
include "koneksi.php";

if (isset($_POST['submit'])) {
    $nim = $_POST['nim']; 
    $kode_mk = $_POST['kode_mk'];
    $nilai = $_POST['nilai'];
    $smt = $_POST['smt'];
    $thajar = $_POST['thajar'];

    $sqlii = "INSERT INTO `ambil_mk`(`nim`, `kode_mk`, `nilai`, `smt`, `thajar`) 
              VALUES ('$nim','$kode_mk','$nilai','$smt','$thajar')";

    if (mysqli_query($conn, $sqlii)) {
        header("Location: table_nilai.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>