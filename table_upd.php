<?php
    include "TampilanHeader.php";
    include "koneksi.php";

   
include "koneksi.php";

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$tgl_lahir = $_POST['tgl_lahir'];
$alamat = $_POST['alamat'];

$sql = mysqli_query($conn, "UPDATE mhs SET nama='$nama', tgl_lahir='$tgl_lahir', alamat='$alamat' WHERE nim='$nim'");
if ($sql) {

    header("location:table_edit.php");
} else {
    echo "gagal update".mysqli_error($conn);
}
?>