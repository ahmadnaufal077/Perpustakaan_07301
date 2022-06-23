<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>admin</title>
	    <link rel="stylesheet" href="admin_css.css?version=51">
    </head>
    <body>
        <div class="judul">		
		    <h1>ADMIN</h1>
	    </div> 
        <div class="text-center">
            <section class="menu t b">
            <a class="logo tambah_logo" href="anggota.php">
                <img class= "tambah"src="..\images\tambah.png"></img>
                ANGGOTA
            </a>
            <a class="logo kurir_logo" href="buku.php">
                <img src="..\images\orang.png"></img>
                BUKU
            </a>
            <a class="logo paket_logo" href="peminjaman.php">
                <img src="..\images\paket.png"></img>
                PEMINJAMAN
            </a>
            </section>
        </div>
        <a class='logout' href='..\logout.php'>LOGOUT</a>
    </body>
</html>