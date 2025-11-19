<?php
include "koneksi.php";

$nim = $_POST['nim'];
$kode_mk = $_POST['kode_mk'];
$nilai = $_POST['nilai'];
$smt = $_POST['smt'];
$thajar = $_POST['thajar'];

$sql = mysqli_query($conn, "UPDATE ambil_mk SET nim='$nim', kode_mk='$kode_mk', nilai='$nilai',smt='$smt', thajar='$thajar' WHERE kode_mk='$kode_mk'");
if ($sql) {

    header("location:table_nilai.php");
} else {
    echo "gagal update".mysqli_error($conn);
}
?>