<?php

session_start();

// ==================== JUDUL HALAMAN ====================
$judul_halaman = "Pengguna";

// ==================== MENAMPILKAN HEADER ====================
include '../../layout/header.php';

// ==================== FUNGSI TOMBOL SIMPAN ==================== 
if (isset($_POST['tambah'])) {
    if (tambah_pengguna($_POST) > 0) {
        $_SESSION['info'] = 'Berhasil Simpan';
        echo    "<script>
                    document.location.href = 'dashboard.php';
                </script>";
    } else {
        $_SESSION['info'] = 'Gagal Simpan';
        echo    "<script>
                    document.location.href = 'pengguna-data.php';
                </script>";
    }
}

?>

<!-- ==================================================================================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pengguna</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Menu</a></li>
                        <li class="breadcrumb-item"><a href="#">Pengguna</a></li>
                        <li class="breadcrumb-item active">Tambah</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main Content -->
    <section class="content">
        <div class="container-fluid">

            <!-- general form elements -->
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Tambah Pengguna</h3>
                </div>
                <!-- /.card-header -->

                <!-- Form -->
                <form action="" method="POST">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama_akun" name="nama_akun" required>
                        </div>
                        <div class="form-group">
                            <label for="level">Jabatan</label>
                            <select class="form-control" name="level" id="level" required>
                                <option value=""></option>
                                <option value="1">Admin</option>
                                <option value="2">User</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="text" class="form-control" id="password" name="password" required>
                        </div>
                        <!-- <div class="form-group">
                            <label for="exampleInputFile">Profil</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile"></label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                            <label class="form-check-label" for="exampleCheck1">Setuju</label>
                        </div> -->
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" name="tambah" class="btn btn-primary">
                            <b>SIMPAN</b>
                        </button>
                    </div>
                </form>
                <!-- Form -->
            </div><!-- /.card -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main Content -->
</div>
<!-- /.content-wrapper -->

<!-- ==================================================================================================== -->

<?php
// ==================== MENAMPILKAN FOOTER ====================
include '../../layout/footer.php';
?>