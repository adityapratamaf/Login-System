<?php

session_start();

// ==================== JUDUL HALAMAN ====================
$judul_halaman = "Dashboard";

// ==================== MENAMPILKAN HEADER ====================
include '../../layout/header.php';

// ==================== FUNGSI MENAMPILKAN DATA DARI DATABASE ====================
$data_pengguna = mysqli_query($db, "SELECT * FROM tb_pengguna");

// ==================== FUNGSI MENAMPILKAN JUMLAH BANYAK DATA DARI DATABASE ====================
$jumlah_pengguna = mysqli_num_rows($data_pengguna);

?>

<!-- ==================================================================================================== -->

<!-- Content Wrapper -->
<div class="content-wrapper">

    <!-- Content Header (Page Header) -->
    <div class="content-header">
        <div class="container-fluid">

            <div class="row mb-1">
                <!-- <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div> -->
                <div class="col-sm-12">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Menu</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- col -->
            </div><!-- row -->

        </div><!-- container-fluid -->
    </div>
    <!-- Content Header (Page Header) -->

    <!-- Main Content -->
    <section class="content">
        <div class="container-fluid">

            <!-- Small Boxes -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>150</h3>
                            <p>New Orders</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-file"></i>
                        </div>
                        <a href="#" class="small-box-footer"><i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>53<sup style="font-size: 20px">%</sup></h3>
                            <p>Bounce Rate</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer"><i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3> <?= $jumlah_pengguna; ?> </h3>
                            <p>Pengguna</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user"></i>
                        </div>
                        <a href="#" class="small-box-footer"><i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>65</h3>
                            <p>Unique Visitors</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer"><i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- Small Boxes -->

            <!---------- KONTEN ---------->
            <div class="row">

                <div class="col">
                    <div class="callout callout-info">
                        <h5><i class="fas fa-envelope-open-text"></i><b> &nbsp; Selamat Datang <?= $_SESSION['nama_akun']; ?> </b></h5>
                        <hr>
                        Aplikasi Sistem Informasi Manajemen
                    </div>
                </div>

                <div class="col">
                    <div class="callout callout-warning">
                        <h5><i class="fas fa-bullhorn"></i><b> &nbsp; Pengumuman </b></h5>
                        <hr>
                        Aplikasi Sedang Dalam Pembangunan
                    </div>
                </div>

            </div>



            <!---------- KONTEN ---------->

        </div><!-- container-fluid -->

    </section>
    <!-- Main Content -->

</div>
<!-- Content Wrapper -->

<!-- ==================================================================================================== -->

<?php
// ==================== MENAMPILKAN FOOTER ====================
include '../../layout/footer.php';
?>