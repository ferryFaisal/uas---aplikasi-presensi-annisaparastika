<?php
require('include/connect_db.php');

$nama             = $_POST['nama'];
$nim              = $_POST['nim'];
$kelas            = $_POST['kelas'];
$makul            = $_POST['makul'];
$status_presensi  = $_POST['status_presensi'];
$tgl_presensi     = $_POST['tgl_presensi'];

$query  = "UPDATE presensi SET makul = '$makul', kelas = '$kelas', nim = '$nim', nama = '$nama', status_presensi = '$status_presensi' ";
$query .= "WHERE nim = '$nim'";
$result = mysqli_query($conn, $query);
if (!$result) {
  die("Query gagal dijalankan: " . mysqli_errno($conn) .
    " - " . mysqli_error($conn));
} else {
  echo "<script>alert('Data berhasil diubah.');window.location='admin_presensi_table.php';</script>";
}
