<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>anggota</title>
	    <link rel="stylesheet" href="admin_css.css?version=51">
    </head>
    <body>
        <div class="judul">		
		    <h1>anggota</h1>
	    </div> 
        <div class="text-center">
            <section class="menu t b">
            <a class="logo tambah_logo" href="tambah_anggota.php">
                <img class= "tambah"src="..\images\tambah.png"></img>
                TAMBAH ANGGOTA
            </a>
            <a class="logo paket_logo" href="lihat_anggota.php">
                <img src="..\images\paket.png"></img>
                LIHAT ANGGOTA
            </a>
            </section>
        </div>
        <a class='logout' href='..\logout.php'>LOGOUT</a>
    </body>
</html>