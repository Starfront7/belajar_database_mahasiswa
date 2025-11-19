<?php
include "koneksi.php";

$kode_mk = $_POST['kode_mk'];
$nama_mk = $_POST['nama_mk'];
$sks = $_POST['sks'];
$smt = $_POST['smt'];

$sql = mysqli_query($conn, "UPDATE mata_kuliah SET nama_mk='$nama_mk', sks='$sks', smt='$smt' WHERE kode_mk='$kode_mk'");
if ($sql) {

    header("location:table_mk.php");
} else {
    echo "gagal update".mysqli_error($conn);
}
?>