<?php

session_start();

include 'config/app.php';

// ==================== AUTENTIKASI LOGIN ====================
// Fungsi Tombol Login
if (isset($_POST['login'])) {
    // Ambil Data Username & Password
    $username   = mysqli_real_escape_string($db, $_POST['username']);
    $password   = mysqli_real_escape_string($db, $_POST['password']);

    // Cek Data Username
    $result     = mysqli_query($db, "SELECT * FROM tb_pengguna WHERE username='$username'");

    // Jika Ada Data Username
    if (mysqli_num_rows($result) == 1) {
        // Cek Data Password
        $hasil  = mysqli_fetch_assoc($result);

        if ($password == $hasil['password']) {
            // Set Data Session
            $_SESSION['login']          = true;
            $_SESSION['id_pengguna']    = $hasil['id_pengguna'];
            $_SESSION['nama_akun']      = $hasil['nama_akun'];
            $_SESSION['username']       = $hasil['username'];
            $_SESSION['level']          = $hasil['level'];

            // Jika Data Login Benar Maka Diarahkan Ke Halaman
            header("Location: app/views/dashboard.php");
            exit();
        }
    }
    // Jika Data Login Salah Maka Dikembalikan Ke Halaman Login & Notifikasi Kesalahan
    $error  = true;
}
// ==================== AUTENTIKASI LOGIN ====================

?>

<!-- ==================================================================================================== -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="admin/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="admin/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="" class="h1"><b>Admin</b>LTE</a>
            </div>

            <div class="card-body">
                <!-- <p class="login-box-msg">Sign in to start your session</p> -->

                <!-- Notifikasi Kesalahan Login -->
                <?php if (isset($error)) : ?>
                    <div class="alert alert-danger alert-dismissible fade show text-center"> <b>USERNAME / PASSWORD SALAH</b>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span id="close" onclick="this.parentNode.parentNode.remove(); return false;">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
                <!-- Notifikasi Kesalahan Login -->

                <form action="" method="POST">
                    <label for="username">USERNAME</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username" name="username" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <label for="password">PASSWORD</label>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password" id="password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="tampilkan" onclick="myFunction()">
                                <label for="tampilkan">
                                    <span class="fas fa-unlock"></span>
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" name="login" class="btn btn-primary btn-block"><b>LOGIN</b></button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="admin/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="admin/dist/js/adminlte.min.js"></script>
    <!-- Tampilkan Password -->
    <script type="text/javascript">
        function myFunction() {
            var tampil = document.getElementById('password');
            if (tampil.type == 'password') {
                tampil.type = 'text';
            } else {
                tampil.type = 'password';
            }
        }
    </script>

</body>

</html>