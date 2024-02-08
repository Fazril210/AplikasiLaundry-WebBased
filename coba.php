<?php
include "../koneksi.php";
$no = 1;
$query = mysqli_query($koneksi, "SELECT * FROM produk ORDER BY nama_produk ASC");
while ($d = mysqli_fetch_array($query)) {
?>
<tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $d['nama_produk']; ?></td>
    <td><?php echo $d['deskripsi']; ?></td>
    <td><?php echo $d['harga']; ?></td>
    <td><?php echo $d['stok']; ?></td>
    <td>
        <img src='<?php echo $d['gambar_produk']; ?>' alt='<?php echo $d['nama_produk']; ?>'
            style='width: 100px; height: 100px;'>
    </td>
    <td>
        <a href="edit.php?id=<?php echo $d['id_produk']; ?>">Edit</a>
        <a href="pelanggan_hapus.php?id=<?php echo $d['id_produk']; ?>"
            onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>
    </td>
</tr>
<?php
}
?>