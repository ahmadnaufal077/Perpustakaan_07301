<?php
session_start();
    // $query1 = mysqli_query($koneksi, "UPDATE anggota SET nama_anggota = '$nama_anggota' , notelp_anggota = '$notelp_anggota' , alamat_anggota = '$alamat_anggota' WHERE id_anggota = '$id' ");
?>
<!DOCTYPE html>
<html>
<head>
    <title>update anggota</title>
    <link rel="stylesheet" href="admin_css.css?version=51">
</head>
<body>
<?php
    $id              = $_GET['id_anggota'];
    include "../koneksi.php";
    $data="SELECT * FROM anggota WHERE id_anggota='$id'";
    $sql=mysqli_query($koneksi,$data);
    $array=mysqli_fetch_array($sql);
?>
    <div class="judul">		
		    <h1>UPDATE ANGGOTA</h1>
	</div>
    <div style="border:0; padding:10px; width:760px; height:auto;">

<form action="action-update.php?id_anggota=<?php echo "$array[0]";?>" method="POST" name="form-input-data">
    <table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr height="46">
                <td width="10%"> </td>
                <td width="25%"> </td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>NAMA ANGGOTA</td>
            <td><input type="text" name="nama_anggota" value="<?php echo "$array[1]";?>" size="35" maxlength="50" /></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>NO TELP ANGGOTA</td>
            <td><input type="text" name="notelp_anggota" value="<?php echo "$array[2]";?>" size="35" maxlength="20" /></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>ALAMAT ANGGOTA</td>
            <td><input type="text" name="alamat_anggota" value="<?php echo "$array[3]";?>" size="50" maxlength="150" /></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td> </td>
            <td><input type="submit" name="Submit" value="Submit">   
                <input type="reset" name="reset" value="Reset"></td>
            <td><a href="halaman_admin.php">kembali</a></td>
        </tr>
    </table>
</form>
</div>
</body>
</html>