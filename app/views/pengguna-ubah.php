<?php

session_start();

// ==================== JUDUL HALAMAN ====================
$judul_halaman = "Pengguna";

// ==================== MENAMPILKAN HEADER ====================
include '../../layout/header.php';

// ambil id yang dipilih
$id_pengguna = (int)$_GET['id_pengguna'];

// ==================== FUNGSI MENAMPILKAN DATA DARI DATABASE ====================
$data_pengguna = select("SELECT * FROM tb_pengguna WHERE id_pengguna = $id_pengguna")[0];

// ==================== FUNGSI TOMBOL SIMPAN ==================== 
// if (isset($_POST['ubah'])) {
//     if (ubah_pengguna($_POST) > 0) {
//         $_SESSION['info'] = 'Berhasil Ubah';
//         echo    "<script>
//                     document.location.href = 'pengguna-data.php';
//                 </script>";
//     } else {
//         $_SESSION['info'] = 'Gagal Ubah';
//         echo    "<script>
//                     document.location.href = 'pengguna-data.php';
//                 </script>";
//     }
// }

if (isset($_POST['ubah'])) {
    if (ubah_pengguna($_POST) > 0) {
        $_SESSION['info'] = 'Berhasil Ubah';

        if ($_SESSION['level'] == 1) {
            echo    "<script>
                        document.location.href = 'pengguna-data.php';
                    </script>";
        } else {
            echo    "<script>
                        document.location.href = 'pengguna-lihat.php';
                    </script>";
        }
    } else {
        $_SESSION['info'] = 'Gagal Ubah';

        if ($_SESSION['level'] == 1) {
            echo    "<script>
                        document.location.href = 'pengguna-data.php';
                    </script>";
        } else {
            echo    "<script>
                        document.location.href = 'pengguna-lihat.php';
                    </script>";
        }
    }
}

?>

<!-- ==================================================================================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-1">
                <!-- <div class="col-sm-6">
                    <h1>Pengguna</h1>
                </div> -->
                <div class="col-sm-12">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Menu</a></li>
                        <li class="breadcrumb-item"><a href="#">Pengguna</a></li>
                        <li class="breadcrumb-item active">Ubah</li>
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
                    <h3 class="card-title">Ubah Pengguna</h3>
                </div>
                <!-- /.card-header -->

                <!-- Form -->
                <form action="" method="POST">
                    <input type="hidden" name="id_pengguna" value="<?= $data_pengguna['id_pengguna']; ?>">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama_akun" name="nama_akun" value="<?= $data_pengguna['nama_akun']; ?>" required>
                        </div>

                        <?php if ($_SESSION['level'] == 1) : ?> <!-- ==================== FUNGSI PERCABANGAN UBAH DATA ADMIN USER ==================== -->
                            <div class=" form-group">
                                <label for="level">Jabatan</label>
                                <select class="form-control" name="level" id="level" required>
                                    <?php $jabatan = $data_pengguna['level']; ?>
                                    <option value="1" <?= $jabatan == '1' ? 'selected' : null  ?>>Admin</option>
                                    <option value="2" <?= $jabatan == '2' ? 'selected' : null  ?>>User</option>
                                </select>
                            </div>
                        <?php else : ?>
                            <input type="hidden" name="level" value="<?= $data_pengguna['level']; ?>"> <!-- ==================== FUNGSI PERCABANGAN UBAH DATA ADMIN USER ==================== -->
                        <?php endif; ?>

                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" value="<?= $data_pengguna['username']; ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="text" class="form-control" id="password" name="password" value="<?= $data_pengguna['password']; ?>" required>
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
                        </div>
                        
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                            <label class="form-check-label" for="exampleCheck1">Setuju</label>
                        </div> -->

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" name="ubah" class="btn btn-primary">
                            <b>UBAH</b>
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