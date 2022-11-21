<?php 
require('include/connect_db.php');

session_start();

if (isset($_SESSION['login']) && $_SESSION['role'] == "Admin") { //jika sudah login
} else if (isset($_SESSION['login']) && $_SESSION['role'] == "Dosen") {
    header("Location: frontend/index.php");
} else {
    die("Anda belum login! Anda tidak berhak masuk ke halaman ini.Silahkan login <a href='login.php'>di sini</a>");

}

$sql = "SELECT * FROM mahasiswa";
$result = mysqli_query($conn, $sql);

$sql1 = "SELECT * FROM presensi";
$result1 = mysqli_query($conn, $sql1);

$sql2 = "SELECT * FROM user";
$result1 = mysqli_query($conn, $sql2);
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin, mahasiswa View</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
    <?php include('include/navbar.php') ?>
    <?php include('include/admin_profile.php') ?>
  </nav>

  <div id="wrapper">
    
<?php 
include('include/admin_sidebar.php')
?>

    <div id="content-wrapper">

        <!-- DataTables Example -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Mahasiswa</li>
        </ol>


        <a class="btn btn-primary mb-3" href="admin_mahasiswa_add.php" role="button" style="margin-left: 10px">New
          <i class="fas fa-plus"></i></a>

        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Mahasiswa Teknik Informatika</div>
            
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Mahasiswa</th>
                    <th>NIM</th>
                    <th>Kelas</th>
                    <!-- <th>Gambar</th> -->
                    <th>Created</th>
                    <th>Modified</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
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
                     <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['nim']; ?></td>
                        <td><?php echo $row['kelas'] ?></td>
                        <td><?php echo $row['date_created']; ?></td>
                        <td><?php echo $row['date_modified']; ?></td>
                        <td>
                          <a href="admin_mahasiswa_edit.php?id=<?php echo $row['id']; ?>">Edit</a> |
                          <a href="proses_mahasiswa_delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                       
                    <?php
                      $no++; 
                    }
                    ?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
        </div>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <?php include('include/footer.php') ?>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

<!-- logout -->
<?php include ('include/logout.php') ?>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

</body>

</html>
