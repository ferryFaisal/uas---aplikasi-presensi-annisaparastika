<?php 
include ('../include/connect_db.php');
session_start();

if (isset($_SESSION['login']) && $_SESSION['role'] == "Dosen") { //jika sudah login
} else if (isset($_SESSION['login']) && $_SESSION['role'] == "Admin") {
    header("Location: ../index.php");
} else {
    die("Anda belum login! Anda tidak berhak masuk ke halaman ini.Silahkan login <a href='login.php'>di sini</a>");

}

$sql = "SELECT * FROM user";
$result = mysqli_query($conn, $sql);

$sql1 = "SELECT * FROM mahasiswa";
$result1 = mysqli_query($conn, $sql1);

$sql2 = "SELECT * FROM presensi";
$result2 = mysqli_query($conn, $sql2);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Input | Presensi Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <h1></h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
    <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header text-center"><h4>Pengisian Kehadiran Mahasiswa</h4></div>
      <div class="card-body">
      <form method="POST" action="../proses_presensi_add.php" enctype="multipart/form-data">
          <!-- <div class="form-group"> -->
         <?php 
         include '../include/admin_profile.php'
         ?>
            <div class="row form-row mb-1">
              <div class="col-md-4">
                <div class="form-label-group">
                  <input type="date" id="tgl" name="tgl_presensi" class="form-control" placeholder="Tgl" autofocus="autofocus" value="">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-label-group">
                  <select name="makul" id="makul" class="form-control" autofocus="autofocus">
                    <option value=""> -- Pilih Mata Kuliah  -- </option>
                    <option value="Pemrograman Web"> Pemrograman Web </option>
                    <option value="Praktikum Pemrograman Web"> Praktik Pemrograman Web </option>
                    <option value="Rekayasa Perangkat Lunak"> Rekayasa Perangkat Lunak </option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <?php 
                // $query = "SELECT * FROM mahasiswa WHERE kelas = '5A'";
                // $result = mysqli_query($conn, $query);
                // if(!$result){
                //   die ("Query Error: ".mysqli_errno($conn).
                //      " - ".mysqli_error($conn));
                // }
                // $no = 1;
                // while($row = mysqli_fetch_assoc($result))
                // {
                 ?>
                
                <div class="form-label-group">
                  <select name="kelas" id="kelas" class="form-control" autofocus="autofocus">
                    <option value=""> -- Pilih Kelas -- </option>
                    <option value="5A"> 5A </option>
                    <option value="5B"> 5B </option>
                  </select>
              </div>
                </div>
                         <?php
                    // }
                    ?>
            </div><hr>
            <div class="row text-center">
                <div class="col-md-4"><strong>Nomor Induk Mahasiswa</strong></div>
                <div class="col-md-4"><strong>Nama Lengkap</strong></div>
                <div class="col-md-4"><strong>Status Presensi</strong></div>
            </div><hr>
             <?php
                    $query = "SELECT * FROM mahasiswa ORDER BY nim ASC";
                    $result = mysqli_query($conn, $query);
                    if(!$result){
                      die ("Query Error: ".mysqli_errno($conn).
                         " - ".mysqli_error($conn));
                    }
                    $no = 1;
                    while($row = mysqli_fetch_assoc($result))
                    {
                    ?>
             <div class="row form-row mb-1">
              <div class="col-md-4">
                <div class="form-label-group">
                  <input type="text" id="nim" name="nim[]" class="form-control" placeholder="NIM" autofocus="autofocus" value="<?php echo $row['nim']?>">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-label-group">
                  <input type="text" id="nama" name="nama[]" class="form-control" placeholder="Nama" autofocus="autofocus" value="<?php echo $row['nama']?>">
                </div>
              </div>
              
             <div class="col-md-4">
                <div class="form-label-group">
                  <select name="status_presensi[]" id="presensi" class="form-control" autofocus="autofocus">
                      <option value=""> -- Pilih Status -- </option>
                      <option selected value="Hadir"> Hadir </option>
                      <option value="Sakit"> Sakit </option>
                      <option value="Izin"> Izin </option>
                      <option value="Alpa"> Alpa </option>
                  </select>
                </div>
              </div>
            </div>
            <?php
                    }
                    ?>
            <!--<div class="row form-row mb-1">
              <div class="col-md-4">
                <div class="form-label-group">
                  <input type="text" id="nim" name="nim" class="form-control" placeholder="NIM" autofocus="autofocus" value="3202016041">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-label-group">
                  <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama" autofocus="autofocus" value="Annisa Parastika Adellia">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-label-group">
                  <select name="presensi" id="presensi" class="form-control" autofocus="autofocus">
                      <option value=""> -- Pilih Status -- </option>
                      <option value="Hadir"> Hadir </option>
                      <option value="Sakit"> Sakit </option>
                      <option value="Izin"> Izin </option>
                      <option value="Alpa"> Alpa </option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row form-row mb-1">
              <div class="col-md-4">
                <div class="form-label-group">
                  <input type="text" id="nim" name="nim" class="form-control" placeholder="NIM" autofocus="autofocus" value="3202016042">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-label-group">
                  <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama" autofocus="autofocus" value="Egi Aenggi">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-label-group">
                  <select name="presensi" id="presensi" class="form-control" autofocus="autofocus">
                      <option value=""> -- Pilih Status -- </option>
                      <option value="Hadir"> Hadir </option>
                      <option value="Sakit"> Sakit </option>
                      <option value="Izin"> Izin </option>
                      <option value="Alpa"> Alpa </option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row form-row mb-1">
              <div class="col-md-4">
                <div class="form-label-group">
                  <input type="text" id="nim" name="nim" class="form-control" placeholder="NIM" autofocus="autofocus" value="3202016045">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-label-group">
                  <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama" autofocus="autofocus" value="Jurina">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-label-group">
                  <select name="presensi" id="presensi" class="form-control" autofocus="autofocus">
                      <option value=""> -- Pilih Status -- </option>
                      <option value="Hadir"> Hadir </option>
                      <option value="Sakit"> Sakit </option>
                      <option value="Izin"> Izin </option>
                      <option value="Alpa"> Alpa </option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row form-row mb-1">
              <div class="col-md-4">
                <div class="form-label-group">
                  <input type="text" id="nim" name="nim" class="form-control" placeholder="NIM" autofocus="autofocus" value="3202016074">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-label-group">
                  <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama" autofocus="autofocus" value="Feby Paramudia">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-label-group">
                  <select name="presensi" id="presensi" class="form-control" autofocus="autofocus">
                      <option value=""> -- Pilih Status -- </option>
                      <option value="Hadir"> Hadir </option>
                      <option value="Sakit"> Sakit </option>
                      <option value="Izin"> Izin </option>
                      <option value="Alpa"> Alpa </option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row form-row mb-1">
              <div class="col-md-4">
                <div class="form-label-group">
                  <input type="text" id="nim" name="nim" class="form-control" placeholder="NIM" autofocus="autofocus" value="3202016075">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-label-group">
                  <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama" autofocus="autofocus" value="Susan">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-label-group">
                  <select name="presensi" id="presensi" class="form-control" autofocus="autofocus">
                      <option value=""> -- Pilih Status -- </option>
                      <option value="Hadir"> Hadir </option>
                      <option value="Sakit"> Sakit </option>
                      <option value="Izin"> Izin </option>
                      <option value="Alpa"> Alpa </option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row form-row mb-1">
              <div class="col-md-4">
                <div class="form-label-group">
                  <input type="text" id="nim" name="nim" class="form-control" placeholder="NIM" autofocus="autofocus" value="3202016076">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-label-group">
                  <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama" autofocus="autofocus" value="Tari">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-label-group">
                  <select name="presensi" id="presensi" class="form-control" autofocus="autofocus">
                      <option value=""> -- Pilih Status -- </option>
                      <option value="Hadir"> Hadir </option>
                      <option value="Sakit"> Sakit </option>
                      <option value="Izin"> Izin </option>
                      <option value="Alpa"> Alpa </option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row form-row mb-1">
              <div class="col-md-4">
                <div class="form-label-group">
                  <input type="text" id="nim" name="nim" class="form-control" placeholder="NIM" autofocus="autofocus" value="3202016077">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-label-group">
                  <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama" autofocus="autofocus" value="Jaka Adi Baskara">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-label-group">
                  <select name="presensi" id="presensi" class="form-control" autofocus="autofocus">
                      <option value=""> -- Pilih Status -- </option>
                      <option value="Hadir"> Hadir </option>
                      <option value="Sakit"> Sakit </option>
                      <option value="Izin"> Izin </option>
                      <option value="Alpa"> Alpa </option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row form-row mb-1">
              <div class="col-md-4">
                <div class="form-label-group">
                  <input type="text" id="nim" name="nim" class="form-control" placeholder="NIM" autofocus="autofocus" value="3202016078">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-label-group">
                  <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama" autofocus="autofocus" value="Aris Adhadi">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-label-group">
                  <select name="presensi" id="presensi" class="form-control" autofocus="autofocus">
                      <option value=""> -- Pilih Status -- </option>
                      <option value="Hadir"> Hadir </option>
                      <option value="Sakit"> Sakit </option>
                      <option value="Izin"> Izin </option>
                      <option value="Alpa"> Alpa </option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row form-row mb-1">
              <div class="col-md-4">
                <div class="form-label-group">
                  <input type="text" id="nim" name="nim" class="form-control" placeholder="NIM" autofocus="autofocus" value="3202016079">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-label-group">
                  <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama" autofocus="autofocus" value="Uray Ibnu Setiawan">
                </div>
              </div> 
              <div class="col-md-4">
                <div class="form-label-group">
                  <select name="presensi" id="presensi" class="form-control" autofocus="autofocus">
                      <option value=""> -- Pilih Status -- </option>
                      <option value="Hadir"> Hadir </option>
                      <option value="Sakit"> Sakit </option>
                      <option value="Izin"> Izin </option>
                      <option value="Alpa"> Alpa </option>
                  </select>
                </div>
              </div>
            </div>-->
          <!-- </div> -->
          <br>
          <p class="text-center">

          <input type="submit" name="submit" value="Simpan Presensi" class="btn btn-primary btn-block" ></p>
          <a class="btn btn-primary" href="../logout_proses.php" role="button">Link</a>
          <!-- <a class="btn btn-secondary btn-block" href="users.php">Cancel</a> -->
        </form>
        <div class="text-center">
          <br>Copyright ?? Program Studi Teknik Informatika - <?= date('Y');?><br>
        </div>
      </div>
    </div>
                
</body>
</html>