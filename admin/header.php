<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="../assets/js/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../assets/DataTables/datatables.min.css">
    <script type="text/javascript" src="../assets/DataTables/datatables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.js"></script>

    <title>Sistem Informasi Laundry - Pemrograman Web Dasar</title>
</head>

<body style="background: #f0f0f0">
    <br>
    <?php
    session_start();
    if($_SESSION['status']!="login"){
        header("location:../index.php?pesan=belum_login");
    }
    ?>
    <nav class="navbar navbar-inverse" style="border-radius: 0px">
        <div class="container-flud">
            <div class="navbar-header">
                <button type class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#b5-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php" class="navbar-brand">BELAJAR SISTEM LAUNDRY</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                    <li><a href="pelanggan.php"><i class="glyphicon glyphicon-user"></i> Pelanggan</a></li>
                    <li><a href="transaksi.php"><i class="glyphicon glyphicon-random"></i> Transaksi</a></li>
                    <li><a href="laporan.php"><i class="glyphicon glyphicon-list-alt"></i> Laporan</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="glyphicon glyphicon-wrench"></i> Pengaturan <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="harga.php"><i class="glyphicon glyphicon-usd"></i> Pengaturan Harga</a></li>
                            <li><a href="ganti_password.php"><i class="glyphicon glyphicon-lock"></i> Ganti Password</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="logout.php"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <p class="navbar-text">Halo, <b><?php echo $_SESSION['username'];?></b> !</p>
                    </li>
                </ul>
            </div>
        </div>
    </nav>