<?php
include"../koneksi.php";
$nama_anggota    = $_POST['nama_anggota'];
$notelp_anggota  = $_POST['notelp_anggota'];
$alamat_anggota  = $_POST['alamat_anggota'];
$id              = $_GET['id_anggota'];
$edit = mysqli_query($koneksi, "UPDATE anggota SET nama_anggota = '$nama_anggota' , notelp_anggota = '$notelp_anggota' , alamat_anggota = '$alamat_anggota' WHERE id_anggota = '$id' ");
$query=mysqli_query($edit); 
header("location:lihat_anggota.php");
?>