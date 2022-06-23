<?php 
session_start();

include '..\koneksi.php';

$data = $_GET['id_peminjaman'];
$tgl = date('Y-m-d');

$quer = mysqli_query($koneksi,"UPDATE peminjaman SET tgl_kembali='$tgl' WHERE id_peminjaman='$data'");

header("location:lihat_peminjaman.php");
?>