<?php
include "koneksi.php"; 

$nim = $_GET['nim'];
mysqli_query($conn, "DELETE FROM mhs WHERE nim='$nim'");

header("Location: table_edit.php");
exit();
?>