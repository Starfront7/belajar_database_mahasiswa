<?php 
include "koneksi.php";

if (isset($_POST['submit'])) {
    $kode_mk = $_POST['kode_mk'];
    $nama_mk = $_POST['nama_mk'];
    $sks = $_POST['sks'];
    $smt = $_POST['smt'];

    $sql = "INSERT INTO mata_kuliah (kode_mk, nama_mk, sks, smt)
            VALUES ('$kode_mk','$nama_mk','$sks','$smt')";

    if (mysqli_query($conn, $sql)) {
        header("Location: table_mk.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>