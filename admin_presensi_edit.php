<?php
require('include/connect_db.php');

session_start();

if (isset($_SESSION['login']) && $_SESSION['role'] == "Admin") { //jika sudah login
} else if (isset($_SESSION['login']) && $_SESSION['role'] == "Dosen") {
    header("Location: frontend/index.php");
} else {
    die("Anda belum login! Anda tidak berhak masuk ke halaman ini.Silahkan login <a href='login.php'>di sini</a>");
}

$sql = "SELECT * FROM user";
$result = mysqli_query($conn, $sql);

$sql1 = "SELECT * FROM mahasiswa";
$result1 = mysqli_query($conn, $sql1);

$sql2 = "SELECT * FROM presensi";
$result2 = mysqli_query($conn, $sql2);

if (isset($_GET['id'])) {
    $id = ($_GET["id"]);

    $query = "SELECT * FROM presensi WHERE id='$id'";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Error: " . mysqli_errno($conn) .
            " - " . mysqli_error($conn));
    }
    $data = mysqli_fetch_assoc($result2);
    if (!count($data)) {
        echo "<script>alert('Data tidak ditemukan pada database');window.location='admin_presensi_table.php';</script>";
    }
} else {
    echo "<script>alert('Masukkan data id.');window.location='admin_presensi_table.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin, Product Edit</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

    <div class="container">
        <div class="card card-register mx-auto mt-5">
            <div class="card-header">Edit Presensi</div>
            <div class="card-body">
                <form method="POST" action="proses_presensi_edit.php" enctype="multipart/form-data">
                    <section class="base">
                        <input name="nim" value="<?php echo $data['nim']; ?>" hidden />
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label>Nama Mahasiswa</label>
                                    <input type="text" name="nama" value="<?php echo $data['nama']; ?>" autofocus="" required="" />
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label>NIM Mahasiswa</label>
                                    <input type="text" name="nim" value="<?php echo $data['nim']; ?>" />
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label>Kelas</label>
                                    <br>
                                    <input type="text" name="kelas" value="<?php echo $data['kelas']; ?>" />
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label>Mata Kuliah</label>
                                    <br>
                                    <select class="form-select" aria-label="Default select example" name="makul" required="required" value="<?php echo $data['role']; ?>">
                                        <option selected value="<?php echo $data['makul']; ?>"> -- Pilih Mata Kuliah -- </option>
                                            <option  value="Pemrograman Web"> Pemrograman Web </option>
                                            <option value="Praktikum Pemrograman Web"> Praktik Pemrograman Web </option>
                                            <option value="Rekayasa Perangkat Lunak"> Rekayasa Perangkat Lunak </option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label>Status Presensi</label>
                                    <br>
                                    <select class="form-select" aria-label="Default select example" name="status_presensi" required="required" value="<?php echo $data['role']; ?>">
                                        <option selected value=""<?php echo $data['status_presensi']; ?>>-- Status Presensi --</option>
                                        <option  value="Hadir">Hadir</option>
                                        <option value="Sakit">Sakit</option>
                                        <option value="Izin">Izin</option>
                                        <option value="Alpa">Alpa</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <div>
                                    <label>Gambar Costumers</label>
                                    <img src="images/<?php echo $data['photo']; ?>" style="width: 100px;float: left;margin-bottom: 5px;">
                                    <input type="file" name="photo" />
                                    <i style="float: left;font-size: 11px;color: red">Abaikan jika tidak merubah gambar produk</i>
                                </div>
                            </div>
                        </div>
                    </div> -->
                        <!-- <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label>Role</label>
                                    <select class="form-select" aria-label="Default select example" name="role" required="required" value="<?php echo $data['role']; ?>">

                                        <option value="<?php echo $data['role']; ?>"> </option>
                                        <option value="Admin">Admin</option>
                                        <option value="Sales">Sales</option>
                                    </select>
                                </div>
                            </div>
                        </div> -->

                        <!-- 
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <label>Harga Beli</label>
                                <input type="text" name="harga" required="" value="<?php echo $data['harga']; ?>" />
                            </div>
                        </div>
                    </div> -->
                        <!-- <select class="form-select" aria-label="Default select example" name="role" required="required">
                        <label>Name</label>
                        <option selected>Select Role</option>
                            <option value="Admin">Admin</option>
                            <option value="Sales">Sales</option>
                        </select> -->

                        <!-- <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div>
                                        <label>Gambar Produk</label>
                                        <img src="images/<?php echo $data['photo']; ?>" style="width: 150px;float: left;margin-bottom: 5px;">
                                        <input type="file" name="gambar_produk" />
                                        <i style="float: left;font-size: 11px;color: red">Abaikan jika tidak merubah gambar produk</i>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div>
                            <br>
                            <button type="submit">Simpan</button>
                        </div>
                    </section>
                </form>

            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>