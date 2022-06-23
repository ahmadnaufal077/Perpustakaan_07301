<?php

if ($_POST['Submit'] == "Submit") {
    $nama_anggota    = $_POST['nama_anggota'];
    $notelp_anggota  = $_POST['notelp_anggota'];
    $alamat_anggota  = $_POST['alamat_anggota'];

    
    
    if (empty($_POST['nama_anggota'])||empty($_POST['notelp_anggota'])||empty($_POST['alamat_anggota'])) {
        ?>
            <script language="JavaScript">
                alert('Data Harap Dilengkapi!');
                document.location='tambah_anggota.php';
            </script>
        <?php
    }else{
        include '..\koneksi.php';
        //tambah anggota
        $query1 = mysqli_query($koneksi, "INSERT INTO anggota VALUES ('','$nama_anggota','$notelp_anggota','$alamat_anggota')");
        header("location:anggota.php");

    }
}

?>