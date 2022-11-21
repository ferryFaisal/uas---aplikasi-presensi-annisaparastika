<?php
require "include/connect_db.php";

  $email         = $_POST['email'];
  $name          = $_POST['name'];
  $role          = $_POST['role'];
  $gambar_produk = $_FILES['photo']['name'];

  if($gambar_produk != "") {
    $ekstensi_diperbolehkan = array('png','jpg');
    $x = explode('.', $gambar_produk);
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['photo']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $nama_gambar_baru = $angka_acak.'-'.$gambar_produk;
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, 'images/'.$nama_gambar_baru);
                      
                   $query  = "UPDATE user SET name = '$name', email = '$email', role = '$role',  photo = '$nama_gambar_baru'";
                    $query .= "WHERE email = '$email'";
                    $result = mysqli_query($conn, $query);

                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($conn).
                             " - ".mysqli_error($conn));
                    } else {
                      echo "<script>alert('Data berhasil diubah.');window.location='admin_user_table.php';</script>";
                    }
              } else {     
                  echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='admin_user_table.php';</script>";
              }
    } else {
      $query  = "UPDATE user SET name = '$name', email = '$email', role = '$role'";
      $query .= "WHERE email = '$email'";
      $result = mysqli_query($conn, $query);
      if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($conn).
                             " - ".mysqli_error($conn));
      } else {
          echo "<script>alert('Data berhasil diubah.');window.location='admin_user_table.php';</script>";
      }
    }
?>