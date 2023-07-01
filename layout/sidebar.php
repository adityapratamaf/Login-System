 <?php

    // ==================== FUNGSI MENGAKTIFKAN SIDEBAR ====================
    $halamanaktif = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], "/") + 1);
    // ==================== FUNGSI MENGAKTIFKAN SIDEBAR ====================

    ?>

 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="" class="brand-link">
         <img src="../../admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-light">AdminLTE 3</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="../../admin/dist/img/profile.png" class="img-circle elevation-2" alt="User Image">
             </div>
             <div class="info">
                 <!-- Fungsi Membuat Huruf Kapital Awal Kalimat -->
                 <?php $nama_pengguna = $_SESSION['nama_akun']; ?>
                 <!-- Fungsi Membuat Huruf Kapital Awal Kalimat -->
                 <a href="#" class="d-block"> <?= ucwords($nama_pengguna); ?> </a>
                 <!-- <a href="#" class="d-block"> Alexander </a> -->
             </div>
         </div>

         <!-- SidebarSearch Form -->
         <div class="form-inline">
             <div class="input-group" data-widget="sidebar-search">
                 <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                 <div class="input-group-append">
                     <button class="btn btn-sidebar">
                         <i class="fas fa-search fa-fw"></i>
                     </button>
                 </div>
             </div>
         </div>

         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                 <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->

                 <li class="nav-header">MENU</li>
                 <li class="nav-item">
                     <a href="dashboard.php" class="nav-link <?= $halamanaktif == 'dashboard.php' ? 'active' : '' ?> ">
                         <!-- <a href="dashboard.php" class="nav-link"> -->
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>
                             Dashboard
                             <span class="badge badge-info right">2</span>
                         </p>
                     </a>
                 </li>

                 <!-- Fungsi Menampilkan Menu Khusus Untuk Admin -->
                 <?php if ($_SESSION['level'] == 1) : ?>

                     <li class="nav-item <?= $halamanaktif == 'pengguna-data.php' || $halamanaktif == 'pengguna-tambah.php' ? 'menu-open' : '' ?> ">
                         <a href="#" class="nav-link <?= $halamanaktif == 'pengguna-data.php' || $halamanaktif == 'pengguna-tambah.php' ? 'active' : '' ?> ">
                             <i class="nav-icon fas fa-users"></i>
                             <p>
                                 Pengguna
                                 <i class="right fas fa-angle-left"></i>
                             </p>
                         </a>
                         <ul class="nav nav-treeview">
                             <li class="nav-item">
                                 <a href="../views/pengguna-data.php" class="nav-link <?= $halamanaktif == 'pengguna-data.php' ? 'active' : '' ?> ">
                                     <i class="far fa-dot-circle nav-icon"></i>
                                     <p>Daftar</p>
                                 </a>
                             </li>
                         </ul>

                         <ul class="nav nav-treeview">
                             <li class="nav-item">
                                 <a href="../views/pengguna-tambah.php" class="nav-link <?= $halamanaktif == 'pengguna-tambah.php' ? 'active' : '' ?> ">
                                     <i class="far fa-dot-circle nav-icon"></i>
                                     <p>Tambah</p>
                                 </a>
                             </li>
                         </ul>
                     </li>

                     <li class="nav-item">
                         <a href="#" class="nav-link">
                             <i class="nav-icon fas fa-bullhorn"></i>
                             <p>
                                 Pengumuman
                             </p>
                         </a>
                     </li>

                 <?php endif; ?>
                 <!-- Fungsi Menampilkan Menu Untuk User = Admin -->

                 <li class="nav-header">KONFIGURASI</li>
                 <li class="nav-item">
                     <a href="logout.php" class="nav-link" data-toggle="modal" data-target="#modal-logout">
                         <i class="nav-icon fas fa-sign-out-alt"></i>
                         <p>
                             Keluar
                         </p>
                     </a>
                 </li>

             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>