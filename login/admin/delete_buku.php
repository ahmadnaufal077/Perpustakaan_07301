<?php
include '..\koneksi.php';
$id              = $_GET['isbn'];
$delete="DELETE FROM buku WHERE isbn ='$id'";
$hapus=mysqli_query($koneksi, $delete);
//detail_peminjaman dan peminjaman
header("location:lihat_buku.php");
?>
