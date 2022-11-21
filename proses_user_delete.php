<?php
require "include/connect_db.php";
  session_start();
  
    $email = $_GET["email"];
    $query = "DELETE FROM user WHERE email= '$email' ";
    $hasil_query = mysqli_query($conn, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($conn).
       " - ".mysqli_error($conn));
    } else {
      echo "<script>alert('Data berhasil dihapus.');window.location='admin_user_table.php';</script>";
    }
