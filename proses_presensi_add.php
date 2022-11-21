<?php
require 'include/connect_db.php';


if( !isset( $_POST['nim'] ) )
{
    header('location:frontend/index-admin.php');
    exit();
}
 
$nama               = $_POST['nama'];
$nim                = $_POST['nim'];
$kelas              = $_POST['kelas'];
$makul              = $_POST['makul'];
$tgl_presensi       = $_POST['tgl_presensi'];
$status_presensi    = $_POST['status_presensi'];

$count = count($nim);
 
$sql   = "INSERT INTO presensi (tgl_presensi,makul,kelas,nama,nim,status_presensi) VALUES ";
for( $i=0; $i < $count; $i++ )
{
    $sql .= "('{$tgl_presensi}','{$makul}','{$kelas}','{$nama[$i]}','{$nim[$i]}','{$status_presensi[$i]}')";
    $sql .= ",";
}
 
$sql = rtrim($sql,",");
 
$insert = $conn->query($sql);
 
if( !$insert )
{
    echo "gagal insert : ".$conn->error;
}else{
    echo "data berhasil dimasukkan ke database";
    header('Location: admin_presensi_table.php');
}



// $nama               = $_POST['nama'];
// $nim                = $_POST['nim'];
// $kelas              = $_POST['kelas'];
// $makul              = $_POST['makul'];
// $tgl_presensi       = $_POST['tgl_presensi'];
// $status_presensi    = $_POST['status_presensi'];


// $sql = "INSERT INTO presensi (tgl_presensi, makul, kelas, nim, nama, status_presensi)
// VALUES (sysdate(),
// '$makul',
// '$kelas',
// '$nim',
// '$nama',
// '$status_presensi'
// )";

// if (mysqli_query($conn, $sql)) {
//     echo "data berhasil dimasukkan ke database";
//     header('Location: admin_presensi_table.php');
//     ob_end_flush();
// } else {
//     echo "gagal memasukkan data: " . mysqli_error($conn);
// }

// mysqli_close($conn);