<?php 
 include '../koneksi.php';

 // Menangkap data yang akan dikirim dari form
$nama = $_POST['nama'];
$hp = $_POST['hp'];
$alamat = $_POST['alamat'];
 
// Input data ke tabel pelanggan
mysqli_query($koneksi, "INSERT INTO pelanggan VALUES('','$nama','$hp','$alamat')");

header("location:pelanggan.php");
?>