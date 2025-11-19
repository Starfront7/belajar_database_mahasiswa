<?php
include "koneksi.php"; 

$kode_mk = $_GET['kode_mk'];
mysqli_query($conn, "DELETE FROM mata_kuliah WHERE kode_mk='$kode_mk'");

header("Location: table_mk.php");
exit();
?>