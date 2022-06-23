<?php 
session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi,"select * from login where username='$username' and password='$password'");

$cek = mysqli_num_rows($login);

if($cek > 0){
	$data = mysqli_fetch_array($login);

    if($data['username']==$username && $data['password']==$password){
	header("location:admin\halaman_admin.php");

    }else{
	header("location:login_page.php?pesan=gagal");
    }
}else{
	header("location:login_page.php?pesan=gagal");
}
?>