<?php

if ($_POST['Submit'] == "Submit") {
    $isbn            = $_POST['isbn'];
    $penerbit_buku   = $_POST['penerbit_buku'];
    $genre_buku      = $_POST['genre_buku'];
    $judul_buku      = $_POST['judul_buku'];
    $penulis_buku    = $_POST['penulis_buku'];
    $tahun_terbit    = $_POST['tahun_terbit'];

    
    
    if (empty($_POST['isbn'])||empty($_POST['penerbit_buku'])||empty($_POST['genre_buku'])||empty($_POST['judul_buku'])||empty($_POST['penulis_buku'])||empty($_POST['tahun_terbit'])) {
        ?>
            <script language="JavaScript">
                alert('Data Harap Dilengkapi!');
                document.location='tambah_buku.php';
            </script>
        <?php
    }else{
        include '..\koneksi.php';
        //tambah buku
        $query1 = mysqli_query($koneksi, "SELECT id_penerbit FROM penerbit");
        $penerbit_fetch=mysqli_fetch_array($query1);
        $id_penerbit=$penerbit_fetch['id_penerbit'];

        $query2 = mysqli_query($koneksi, "SELECT id_genre FROM genre");
        $genre_fetch=mysqli_fetch_array($query2);
        $id_genre=$genre_fetch['id_genre'];

        $query3 = mysqli_query($koneksi, "INSERT INTO buku VALUES ('$isbn','$id_penerbit','$id_genre','$judul_buku','$penulis_buku','$tahun_terbit')");
        header("location:buku.php");


    }
}

?>