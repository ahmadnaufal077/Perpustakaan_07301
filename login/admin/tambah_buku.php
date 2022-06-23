<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>tambah buku</title>
    <link rel="stylesheet" href="admin_css.css?version=51">
</head>
<body>
    <div class="judul">		
		    <h1>TAMBAH BUKU</h1>
	</div>
    <div style="border:0; padding:10px; width:760px; height:auto;">
<form action="action-tambah-buku.php" method="POST" name="form-input-data">
    <table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr height="46">
                <td width="10%"> </td>
                <td width="25%"> </td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>ISBN</td>
            <td><input type="text" name="isbn" size="35" maxlength="50" /></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>NAMA PENERBIT</td>
            <td><select name="penerbit_buku">
                    <option value="">- Pilih penerbit -
                    <option value="rico">rico
                    <option value="gezz">gezz
                    <option value="pramudiana">pramudiana
                    <option value="sugianto">sugianto
                    <option value="sani">sani
                    <option value="john">john
                    <option value="jack">jack
                    <option value="lesbi">lesbi
                    <option value="rido">rido
                    <option value="bagas">bagas
                </select></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>GENRE</td>
            <td><select name="genre_buku">
                    <option value="">- Pilih penerbit -
                    <option value="horor">horor
                    <option value="action">action
                    <option value="misteri">misteri
                    <option value="romance">romance
                    <option value="mature">mature
                    <option value="pendidikan">pendidikan
                    <option value="kids">kids
                    <option value="fantasi">fantasi
                    <option value="binatang">binatang
                    <option value="pelayaran">pelayaran
                </select></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>JUDUL BUKU</td>
            <td><input type="text" name="judul_buku" size="35" maxlength="50" /></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>PENULIS BUKU</td>
            <td><input type="text" name="penulis_buku" size="35" maxlength="50" /></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>TAHUN TERBIT</td>
            <td><input type="text" name="tahun_terbit" size="35" maxlength="50" /></td>
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