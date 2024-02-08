<?php 
    $koneksi = mysqli_connect("localhost","root","","laundry");

    if (mysqli_connect_errno()){
        echo "Koneksi Gagal ke Database: ".mysqli_connect_error();
    }
?>