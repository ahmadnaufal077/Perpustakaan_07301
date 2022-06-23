<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>tambah peminjaman</title>
    <link rel="stylesheet" href="admin_css.css?version=51">
</head>
<body>
    <div class="judul">		
		    <h1>TAMBAH PEMINJAMAN</h1>
	</div>
    <div style="border:0; padding:10px; width:760px; height:auto;">
<form action="action-tambah-peminjaman.php" method="POST" name="form-input-data">
    <table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr height="46">
                <td width="10%"> </td>
                <td width="25%"> </td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>JUDUL BUKU</td>
            <td><select name="judul_buku">
                    <option value="">- Pilih judul -
                    <option value="marmut">marmut
                    <option value="maman">maman
                    <option value="mimin">mimin
                    <option value="anakku">anakku
                    <option value="ananda">ananda
                    <option value="gunaidi">gunaidi
                    <option value="alanada">alanada
                    <option value="ambisi">ambisi
                </select></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>NAMA PEMINJAM</td>
            <td><select name="nama_anggota">
                    <option value="">- Pilih anggota -
                    <option value="alfa">alfa
                    <option value="ilyasa">ilyasa
                    <option value="bagas">bagas
                    <option value="fayi">fayi
                    <option value="nindi">nindi
                </select></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>NAMA PETUGAS</td>
            <td><select name="nama_petugas">
                    <option value="">- Pilih petugas -
                    <option value="rahman">rahman
                    <option value="maulana">maulana
                    <option value="indah">indah
                    <option value="aulifia">aulifia
                    <option value="nando">nando
                    <option value="ina">ina
                    <option value="alif">alif
                    <option value="ana">ana
                    <option value="bobi">bobi
                    <option value="allan">allan
                </select></td>
        </tr>
        <br><br>
        <input type="hidden" name="tanggal_peminjaman" value="<?php echo date('Y-m-d'); ?>">
        <tr height="46">
            <td> </td>
            <td> </td>
            <td><input type="submit" name="Submit" value="Submit">   
                <input type="reset" name="reset" value="Reset"></td>
            <td><a href="buku.php">kembali</a></td>
        </tr>
    </table>
</form>
</div>
</body>
</html>