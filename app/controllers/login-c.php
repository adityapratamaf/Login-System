<?php

// ======================================== SELECT / MENAMPILKAN DATA ========================================
function select($query)
{
    // panggil koneksi database
    global $db;

    $result = mysqli_query($db, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// ======================================== PENGGUNA ========================================
// Fungsi Tambah Data
function tambah_pengguna($POST)
{
    global $db;

    $nama_akun = $POST['nama_akun'];
    $username = $POST['username'];
    $password = $POST['password'];
    $level = $POST['level'];

    // Fungsi Query Tambah Data Ke Database
    $query = "INSERT INTO tb_pengguna VALUES(null, '$nama_akun', '$username', '$password', '$level')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// Fungsi Hapus Data
function hapus_pengguna($id_pengguna)
{
    global $db;

    // Fungsi Query Hapus Data Di Database
    $query = "DELETE FROM tb_pengguna WHERE id_pengguna=$id_pengguna";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// Funsgi Ubah Data
function ubah_pengguna($POST)
{
    global $db;

    $id_pengguna = $POST['id_pengguna'];
    $nama_akun = $POST['nama_akun'];
    $username = $POST['username'];
    $password = $POST['password'];

    // Fungsi Query Ubah Data Ke Database
    $query = "UPDATE tb_pengguna SET nama_akun='$nama_akun', username='$username', password='$password' WHERE id_pengguna=$id_pengguna";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}
