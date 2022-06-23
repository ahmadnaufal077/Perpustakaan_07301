<?php

if ($_POST['Submit'] == "Submit") {
    $judul_buku         = $_POST['judul_buku'];
    $nama_peminjam      = $_POST['nama_anggota'];
    $nama_petugas       = $_POST['nama_petugas'];
    $tanggal_peminjaman = $_POST['tanggal_peminjaman'];
    

    
    
    if (empty($_POST['judul_buku'])||empty($_POST['nama_anggota'])||empty($_POST['nama_petugas'])||empty($_POST['tanggal_peminjaman'])) {
        ?>
            <script language="JavaScript">
                alert('Data Harap Dilengkapi!');
                document.location='tambah_peminjaman.php';
            </script>
        <?php
    }else{
        include '..\koneksi.php';
        //tambah peminjaman
        $query1 = mysqli_query($koneksi, "SELECT isbn FROM buku WHERE judul_buku = '$judul_buku'");
        $buku_fetch=mysqli_fetch_array($query1);
        $isbn=$buku_fetch['isbn'];

        $query2 = mysqli_query($koneksi, "SELECT id_anggota FROM anggota WHERE nama_anggota = '$nama_peminjam'");
        $anggota_fetch=mysqli_fetch_array($query2);
        $id_anggota=$anggota_fetch['id_anggota'];

        $query3 = mysqli_query($koneksi, "SELECT id_petugas FROM petugas WHERE nama_petugas = '$nama_petugas'");
        $petugas_fetch=mysqli_fetch_array($query3);
        $id_petugas=$petugas_fetch['id_petugas'];

        $query4 = mysqli_query($koneksi, "INSERT INTO peminjaman VALUES ('','$id_petugas','$id_anggota','$tanggal_peminjaman','')");
       
        $query5 = mysqli_query($koneksi, "SELECT id_peminjaman FROM peminjaman WHERE id_petugas = '$id_petugas' AND id_anggota = '$id_anggota'");
        $peminjaman_fetch=mysqli_fetch_array($query5);
        $id_peminjaman=$peminjaman_fetch['id_peminjaman'];

        $query6 = mysqli_query($koneksi, "INSERT INTO detail_peminjaman VALUES ('$isbn','$id_peminjaman')");

        header("location:peminjaman.php");


    }
}

?>