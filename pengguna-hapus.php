<?php

session_start();

include 'config/app.php';

// Menerima id Yang Dipilih
$id_pengguna = (int)$_GET['id_pengguna'];

if (hapus_pengguna($id_pengguna) > 0) {
    $_SESSION['info'] = 'Berhasil Hapus';
    echo    "<script>
                document.location.href = 'pengguna-data.php';
            </script>";
} else {
    $_SESSION['info'] = 'Gagal Hapus';
    echo    "<script>
                document.location.href = 'pengguna-data.php';
            </script>";
}
