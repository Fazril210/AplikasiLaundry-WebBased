<?php include 'header.php'; ?>
<div class="container">
    <div class="panel">
        <div class="panel-heading">
            <h4>Data Pelanggan</h4>
        </div>
        <div class="panel-body">
            <a href="pelanggan_tambah.php" class="btn btn-sm btn-info pull-left">Tambah</a>
            <br>
            <br>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th width="1%">No</th>
                        <th>Nama</th>
                        <th>HP</th>
                        <th>Alamat</th>
                        <th width="15%">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                include "../koneksi.php";
                $no = 1;
                $query = mysqli_query($koneksi, "SELECT * FROM pelanggan ORDER BY namaPelanggan ASC");
                while ($d = mysqli_fetch_array($query)){
                ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['namaPelanggan']; ?></td>
                        <td><?php echo $d['hpPelanggan']; ?></td>
                        <td><?php echo $d['alamatPelanggan']; ?></td>
                        <td>
                            <a href="pelanggan_edit.php?id=<?php echo $d['idPelanggan']; ?>"
                                class="btn btn-sm btn-warning">Edit</a>
                            <a href="pelanggan_hapus.php?id=<?php echo $d['idPelanggan']; ?>"
                                class="btn btn-sm btn-danger"
                                onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                    <?php  
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>