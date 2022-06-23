<?php

if ($_POST['Submit'] == "Submit") {
    $nama_pengirim    = $_POST['nama_pengirim'];
    $notelp_pengirim  = $_POST['notelp_pengirim'];
    $alamat_pengirim  = $_POST['alamat_pengirim'];
    $nama_barang      = $_POST['nama_barang'];
    $berat            = $_POST['berat'];
    $nama_penerima    = $_POST['nama_penerima'];
    $alamat_tujuan    = $_POST['alamat_tujuan'];
    $kode_pos         = $_POST['kode_pos'];
    $nama_kurir       = $_POST['nama_kurir'];

    
    if (empty($_POST['nama_pengirim'])||empty($_POST['notelp_pengirim'])||empty($_POST['alamat_pengirim'])||empty($_POST['nama_barang'])
    ||empty($_POST['berat'])||empty($_POST['nama_penerima'])||empty($_POST['alamat_tujuan'])||empty($_POST['kode_pos'])
    ||empty($_POST['nama_kurir'])) {
        ?>
            <script language="JavaScript">
                alert('Data Harap Dilengkapi!');
                document.location='tambah_data.php';
            </script>
        <?php
    }else{
        include '..\koneksi.php';
        //data costumer
        $query1 = mysqli_query($koneksi, "SELECT * FROM data_customer WHERE nama_pengirim='$nama_pengirim'");
        $cek_nama = mysqli_num_rows($query1);
        if($cek_nama > 0){
            $data = mysqli_fetch_array($query1);
            $nama_pengirim = $data['nama_pengirim'];
            $notelp_pengirim  = $data['notelp_pengirim'];
            $alamat_pengirim  = $data['alamat_pengirim'];
        }else{
            $query2 = mysqli_query($koneksi, "INSERT INTO data_customer VALUES ('','$nama_pengirim','$notelp_pengirim','$alamat_pengirim')");
        }

        //barang
        $querybarang = mysqli_query($koneksi, "SELECT * FROM barang WHERE nama_barang='$nama_barang' AND berat='$berat'");
        $cek_barang = mysqli_num_rows($querybarang);
        if($cek_barang > 0){
            $data = mysqli_fetch_array($querybarang);
            $nama_barang = $data['nama_barang'];
            $berat  = $data['berat'];
        }else{
            $query3 = mysqli_query($koneksi, "INSERT INTO barang VALUES ('','$nama_barang','$berat')");
        }
        

        //select barang
        $query4 = mysqli_query($koneksi, "SELECT id_barang, (berat * 5000) AS total FROM barang WHERE nama_barang='$nama_barang' AND berat ='$berat'");
        $data2 = mysqli_fetch_array($query4);
        $id_barang = $data2['id_barang'];
        $total = $data2['total'];

        //id kurir
        $query5 = mysqli_query($koneksi, "SELECT kode_kurir FROM kurir WHERE nama_kurir='$nama_kurir'");
        $data3 = mysqli_fetch_array($query5);
        $kode_kurir = $data3['kode_kurir'];

        //transaksi
        $query6 = mysqli_query($koneksi, "INSERT INTO transaksi VALUES ('','$kode_kurir','$id_barang','$nama_penerima','$alamat_tujuan','$kode_pos','','proses','$total')");
        
        //detail transaksi
        $query7 = mysqli_query($koneksi, "SELECT no_resi FROM transaksi WHERE kode_kurir='$kode_kurir' AND id_barang='$id_barang'");
        $data4 = mysqli_fetch_array($query7);
        $no_resi = $data4['no_resi'];
        $query8 = mysqli_query($koneksi, "SELECT id_pengirim FROM data_customer WHERE nama_pengirim='$nama_pengirim'");
        $data5 = mysqli_fetch_array($query8);
        $id_pengirim = $data5['id_pengirim'];
        $query9 = mysqli_query($koneksi, "INSERT INTO detail_transaksi VALUES ('$no_resi','$id_pengirim')");

        header("location:halaman_administrasi.php");
    }
}

?>