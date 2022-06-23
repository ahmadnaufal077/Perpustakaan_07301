<?php
include '..\koneksi.php';
$id              = $_GET['id_anggota'];

$peminjaman="SELECT id_peminjaman FROM peminjaman WHERE id_anggota = '$id'";
$pinjam=mysqli_query($koneksi, $peminjaman);
$id_fetch=mysqli_fetch_array($pinjam);
$id_pinjam=$id_fetch['id_peminjaman'];
$detail="DELETE FROM detail_peminjaman WHERE id_peminjaman ='$id_pinjam'";
$detail_pinjam=mysqli_query($koneksi, $detail);
$delete_pinjam="DELETE FROM peminjaman WHERE id_anggota ='$id'";
$hapus_pinjam=mysqli_query($koneksi, $delete_pinjam);

$delete="DELETE FROM anggota WHERE id_anggota ='$id'";
$hapus=mysqli_query($koneksi, $delete);
//detail_peminjaman dan peminjaman
header("location:lihat_anggota.php");
?>
