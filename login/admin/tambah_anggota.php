<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>tambah anggota</title>
    <link rel="stylesheet" href="admin_css.css?version=51">
</head>
<body>
    <div class="judul">		
		    <h1>TAMBAH ANGGOTA</h1>
	</div>
    <div style="border:0; padding:10px; width:760px; height:auto;">
<form action="action-tambah-anggota.php" method="POST" name="form-input-data">
    <table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr height="46">
                <td width="10%"> </td>
                <td width="25%"> </td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>NAMA ANGGOTA</td>
            <td><input type="text" name="nama_anggota" size="35" maxlength="50" /></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>NO TELP ANGGOTA</td>
            <td><input type="text" name="notelp_anggota" size="35" maxlength="20" /></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>ALAMAT ANGGOTA</td>
            <td><input type="text" name="alamat_anggota" size="50" maxlength="150" /></td>
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