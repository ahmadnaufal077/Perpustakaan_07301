<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>buku</title>
	    <link rel="stylesheet" href="admin_css.css?version=51">
    </head>
    <body>
        <div class="judul">		
		    <h1>buku</h1>
	    </div> 
        <div class="text-center">
            <section class="menu t b">
            <a class="logo tambah_logo" href="tambah_buku.php">
                <img class= "tambah"src="..\images\tambah.png"></img>
                TAMBAH BUKU
            </a>
            <a class="logo paket_logo" href="lihat_buku.php">
                <img src="..\images\paket.png"></img>
                LIHAT BUKU
            </a>
            </section>
        </div>
        <a class='logout' href='..\logout.php'>LOGOUT</a>
    </body>
</html>