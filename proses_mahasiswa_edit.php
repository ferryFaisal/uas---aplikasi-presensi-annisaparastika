<?php
require('include/connect_db.php');

$id1            = $_POST['id'];
$nama          = $_POST['nama'];
$nim           = $_POST['nim'];
$kelas         = $_POST['kelas'];

$query  = "UPDATE mahasiswa SET nim = '$nim', nama = '$nama', kelas = '$kelas'";
$query .= "WHERE id = '$id1'";
$result = mysqli_query($conn, $query);
if (!$result) {
  die("Query gagal dijalankan: " . mysqli_errno($conn) .
    " - " . mysqli_error($conn));
} else {
  echo "<script>alert('Data berhasil diubah.');window.location='admin_mahasiswa_table.php';</script>";
}
