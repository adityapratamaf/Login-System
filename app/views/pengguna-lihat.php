<?php

session_start();

// ==================== JUDUL HALAMAN ====================
$judul_halaman = "Pengguna";

// ==================== MENAMPILKAN HEADER ====================
include '../../layout/header.php';

// ==================== FUNGSI MENAMPILKAN DATA DARI DATABASE ====================
$data_pengguna = select("SELECT * FROM tb_pengguna");

?>

<!-- ==================================================================================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- navbar navbar-light bg-light -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-1">
                <div class="col-sm-12">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Menu</a></li>
                        <li class="breadcrumb-item"><a href="#">Pengguna</a></li>
                        <li class="breadcrumb-item active">Profil</li>
                    </ol>
                </div>
            </div>

        </div>
    </section>

    <!-- Main Content -->
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-4">

                    <div class="card">

                        <div class="card-header card-primary card-outline">
                            <h3 class="card-title"> Profil Pengguna</h3>
                        </div>

                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle" src="../../admin/dist/img/profile.png" alt="User profile picture">
                            </div>
                            <h3 class="profile-username text-center"> <?= $_SESSION['nama_akun']; ?> </h3>
                            <p class="text-muted text-center"> <?php if ($_SESSION['level'] == 1) {
                                                                    echo "Administrator";
                                                                } else {
                                                                    echo "User";
                                                                }
                                                                ?> </p>
                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Nama</b> <a class="float-right">1,322</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Jabatan</b> <a class="float-right">543</a>
                                </li>
                            </ul>
                            <a href="pengguna-ubah.php?id_pengguna=<?= $_SESSION['id_pengguna']; ?>" class="btn btn-primary btn-block"><b>PENGATURAN</b></a>
                        </div>

                    </div>


                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">About Me</h3>
                        </div>

                        <div class="card-body">
                            <strong><i class="fas fa-book mr-1"></i> Education</strong>
                            <p class="text-muted">
                                B.S. in Computer Science from the University of Tennessee at Knoxville
                            </p>
                            <hr>
                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
                            <p class="text-muted">Malibu, California</p>
                            <hr>
                            <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>
                            <p class="text-muted">
                                <span class="tag tag-danger">UI Design</span>
                                <span class="tag tag-success">Coding</span>
                                <span class="tag tag-info">Javascript</span>
                                <span class="tag tag-warning">PHP</span>
                                <span class="tag tag-primary">Node.js</span>
                            </p>
                            <hr>
                            <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                        </div>

                    </div>

                </div>

                <div class="col-md-8">

                    <div class="card">
                        <div class="card-header p-1">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#biodata" data-toggle="tab">Biodata</a></li>
                                <li class="nav-item"><a class="nav-link" href="#aktivitas" data-toggle="tab">Aktivitas</a></li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <div class="tab-content">

                                <div class="active tab-pane" id="biodata">

                                    <div class="row">

                                        <div class="col-md-6">
                                            <b>Nama</b>
                                            <p> <?= $_SESSION['nama_akun']; ?> </p>
                                        </div>

                                        <div class="col-md-6">
                                            <b>Jabatan</b>
                                            <p> <?php if ($_SESSION['level'] == 1) {
                                                    echo "Administrator";
                                                } else {
                                                    echo "User";
                                                }
                                                ?>
                                            </p>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-md-6">
                                            <b>Username</b>
                                            <p> <?= $_SESSION['username']; ?> </p>
                                        </div>

                                        <div class="col-md-6">
                                            <b>Password</b>
                                            <p> ******** </p>
                                        </div>

                                    </div>

                                </div>

                                <div class="tab-pane" id="aktivitas">
                                    <p>Test</p>
                                </div>

                                <div class="tab-pane" id="pengaturan">
                                    <form class="form-horizontal">
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Nama</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="inputName" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Jabatan</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName2" class="col-sm-2 col-form-label">Username</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputName2" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputExperience" class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputName2" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                                    <label class="form-check-label" for="exampleCheck1">Setuju</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-primary"> <b>UBAH</b> </button>
                                            </div>
                                        </div>

                                    </form>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>


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