<?php 

$s = "localhost";
$u = "root";
$p = "";
$db = "mahasiswa";

$conn = new mysqli($s, $u, $p, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
} else {
    echo "Koneksi Berhasil";
}

?>