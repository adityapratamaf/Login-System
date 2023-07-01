const notifikasi = $('.info-data').data('infodata');

// Notifikasi Tambah
if (notifikasi == "Berhasil Simpan") {
    toastr["success"]("Data Berhasil Disimpan")

} else if (notifikasi == "Gagal Simpan") {
    toastr["error"]("Data Gagal Disimpan")

    // Notifikasi Hapus
} else if (notifikasi == "Berhasil Hapus") {
    toastr["success"]("Data Berhasil Dihapus")

} else if (notifikasi == "Gagal Hapus") {
    toastr["error"]("Data Gagal Dihapus")

    // Notifikasi Ubah
} else if (notifikasi == "Berhasil Ubah") {
    toastr["success"]("Data Berhasil Diubah")

} else if (notifikasi == "Gagal Ubah") {
    toastr["error"]("Data Gagal Diubah")
}