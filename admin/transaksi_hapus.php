<?php
// Koneksi Database
include '../koneksi.php';

// Menangkap id yang dikirim melalui URL
$id = $_GET['id'];

// menghapus transaksi
mysqli_query($koneksi, "DELETE FROM transaksi WHERE transaksi_id='$id'");

// menghapus data pakaian dalam transaksi ini
mysqli_query($koneksi, "DELETE FROM pakaian WHERE pakaian_transaksi='$id'");

// alihkan halaman ke halaman transaksi
header("location: transaksi.php");
?>