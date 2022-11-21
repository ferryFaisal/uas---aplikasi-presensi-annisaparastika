<?php
require('include/connect_db.php');
session_start();

$id = $_GET["id"];
$query = "DELETE FROM mahasiswa WHERE id = '$id' ";
$hasil_query = mysqli_query($conn, $query);

//periksa query, apakah ada kesalahan
if (!$hasil_query) {
  die("Gagal menghapus data: " . mysqli_errno($conn) .
    " - " . mysqli_error($conn));
} else {
  echo "<script>alert('Data berhasil dihapus.');window.location='admin_mahasiswa_table.php';</script>";
}
