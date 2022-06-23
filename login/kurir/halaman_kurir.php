<?php
session_start();
$nama			= $_SESSION['nama'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Kurir</title>
	<link rel="stylesheet" href="kurir.css">
</head>
<body>
	<div class="judul">		
		<h1>PAKET</h1>
	</div>
	<br/>
	<table style="margin-left:auto;margin-right:auto" width="50%" class="table">
		<tr>
		 	<th>Nama Penerima</th>
		 	<th>Nama barang</th>
         	<th>Alamat</th>
            <th>kode pos</th>
            <th>Status Pengiriman</th>		
		</tr>
		<?php 
		include '..\koneksi.php';
		$join           = "SELECT * FROM kurir LEFT JOIN barang INNER JOIN transaksi ON barang.id_barang = transaksi.id_barang ON kurir.kode_kurir = transaksi.kode_kurir WHERE status_pengiriman='proses' AND nama_kurir='$nama' ORDER BY no_resi DESC";
		$select         = mysqli_query($koneksi, $join);
		while($data = mysqli_fetch_array($select)){
		?>
		<tr>
			<td><?php echo $data['nama_penerima']; ?></td>
			<td><?php echo $data['nama_barang']; ?></td>
			<td><?php echo $data['alamat_tujuan']; ?></td>
			<td><?php echo $data['kode_pos']; ?></td>
			<td><?php echo $data['status_pengiriman']; ?></td>
			<td>
				<a class="confirm" href="confirm.php?no_resi=<?php echo $data['no_resi']; ?>">CONFIRM</a> 				
			</td>
		</tr>
		<?php } ?>
	</table>
	<a class='logout' href='..\logout.php'>LOGOUT</a>
</body>
</html>