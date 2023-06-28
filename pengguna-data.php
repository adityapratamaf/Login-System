<?php

session_start();

// ==================== JUDUL HALAMAN ====================
$judul_halaman = "Pengguna";

// ==================== MENAMPILKAN HEADER ====================
include 'layout/header.php';

// ==================== FUNGSI MENAMPILKAN DATA DARI DATABASE ====================
$data_pengguna = select("SELECT * FROM tb_pengguna");

?>

<!-- ==================================================================================================== -->

<!-- ==================== FUNGSI MENAMPILKAN NOTIFIKASI = ALERT ==================== -->
<div class="info-data" data-infodata="<?php if (isset($_SESSION['info'])) {
                                            echo $_SESSION['info'];
                                        }
                                        unset($_SESSION['info']); ?>">
</div>

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
                        <li class="breadcrumb-item active">Daftar</li>
                    </ol>
                </div>
            </div>

        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Daftar Pengguna</h3>
                    <!-- <a href="cetak.php" id="#mauexport" class="btn btn-success btn-sm"><i class="fas fa-pencil-alt"></i></a> -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Level</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $nomor = 1; ?>
                            <?php foreach ($data_pengguna as $pengguna) : ?>
                                <tr>
                                    <td> <?= $nomor++; ?> </td>
                                    <td> <?= $pengguna['nama_akun']; ?> </td>
                                    <td> <?= $pengguna['username']; ?> </td>
                                    <td> <?= $pengguna['password']; ?> </td>
                                    <!-- <td> <?= $pengguna['level']; ?> </td> -->
                                    <td>
                                        <?php if ($pengguna['level'] == 1) {
                                            echo "Administrator";
                                        } else {
                                            echo "User";
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <a href="pengguna-ubah.php?id_pengguna=<?= $pengguna['id_pengguna']; ?>" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="bottom" title="Ubah"><i class="fas fa-pencil-alt"></i></a>
                                        <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-hapus<?= $pengguna['id_pengguna']; ?>" data-toggle="tooltip" data-placement="bottom" title="Hapus"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <!-- <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Level</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot> -->
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

</div>
<!-- /.content-wrapper -->

<!-- ==================== MODAL = HAPUS ==================== -->
<div class="modal fade" id="modal-hapus<?= $pengguna['id_pengguna']; ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><b>HAPUS</b></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- <div class="modal-body">
                        <p>Apakah Anda Ingin Logout ? </p>
                    </div> -->
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal"> <b>TIDAK</b> </button>
                <a href="pengguna-hapus.php?id_pengguna=<?= $pengguna['id_pengguna']; ?>" type="button" class="btn btn-primary"> <b>YA</b> </a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- ==================== MODAL = HAPUS ==================== -->

<!-- ==================================================================================================== -->

<?php
// ==================== MENAMPILKAN FOOTER ====================
include 'layout/footer.php';
?>