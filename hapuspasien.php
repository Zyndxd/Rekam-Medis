<?php
include 'koneksi/koneksi.php';

// Pastikan parameter id tersedia
if (!isset($_GET['id'])) {
    echo "ID tidak ditemukan.";
    exit();
}

$no_pasien = $_GET['id'];

// Lakukan query penghapusan
$hapus = mysqli_query($connection, "DELETE FROM pasien WHERE no_pasien = '$no_pasien'");

if ($hapus) {
    // Redirect ke halaman daftar pasien setelah berhasil
    header("Location: TDpasien.php?status=hapus_sukses");
    exit();
} else {
    echo "Data gagal dihapus.";
}
?>
