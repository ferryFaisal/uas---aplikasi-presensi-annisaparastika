<?php
require "include/connect_db.php";

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

if (isset($_GET['email'])) {
    $email = ($_GET["email"]);

    $query = "SELECT * FROM user WHERE email='$email'";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Error: " . mysqli_errno($conn) .
            " - " . mysqli_error($conn));
    }
    $data = mysqli_fetch_assoc($result);
    if (!count($data)) {
        echo "<script>alert('Data tidak ditemukan pada database');window.location='table_user.php';</script>";
    }
} else {
    echo "<script>alert('Masukkan data id.');window.location='table_user.php';</script>";
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

    <title>Admin, User Edit</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

    <div class="container">
        <div class="card card-register mx-auto mt-5">
            <div class="card-header">Edit User</div>
            <div class="card-body">
                <form method="POST" action="proses_user_edit.php" enctype="multipart/form-data">
                    <section class="base">
                        <input name="id" value="<?php echo $data['email']; ?>" hidden />
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label>Email</label>
                                    <input type="text" name="email" value="<?php echo $data['email']; ?>" autofocus="" required="" />
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label>Name</label>
                                    <input type="text" name="name" value="<?php echo $data['name']; ?>" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <div>
                                    <label>Gambar User</label>
                                    <img src="images/<?php echo $data['photo']; ?>" style="width: 100px;float: left;margin-bottom: 5px;">
                                    <input type="file" name="photo" />
                                    <i style="float: left;font-size: 11px;color: red">Abaikan jika tidak merubah gambar produk</i>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label>Role</label>
                                    <select class="form-select" aria-label="Default select example" name="role" required="required" value="<?php echo $data['role']; ?>">

                                        <option value="<?php echo $data['role']; ?>"> </option>
                                        <option selected value="Admin">Admin</option>
                                        <option value="Dosen">Dosen</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div>

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