<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>peminjaman</title>
	<link rel="stylesheet" href="anggota_css.css">
</head>
<body>
	<div class="judul">		
		<h1>PEMINJAMAN</h1>
	</div>
	<br/>
	<table style="margin-left:auto;margin-right:auto" width="50%" class="table">
		<tr>
		 	<th>Judul buku</th>
		 	<th>Nama peminjam</th>
            <th>Tanggal Peminjaman</th>
            <th>Tanggal Kembali</th>	
		</tr>
		<?php 
		include '..\koneksi.php';
		$join           = "SELECT * FROM anggota left join peminjaman inner join buku inner join detail_peminjaman 
                            on buku.isbn = detail_peminjaman.isbn 
                            on peminjaman.id_peminjaman = detail_peminjaman.id_peminjaman 
                            on anggota.id_anggota = peminjaman.id_anggota";
		$select         = mysqli_query($koneksi, $join);
		while($data = mysqli_fetch_array($select)){
		?>
		<tr>
			<td><?php echo $data['judul_buku']; ?></td>
			<td><?php echo $data['nama_anggota']; ?></td>
			<td><?php echo $data['tgl_peminjaman']; ?></td>
            <td><?php echo $data['tgl_kembali']; ?></td>
			<td>
				<a class="confirm" href="confirm.php?id_peminjaman=<?php echo $data['id_peminjaman']; ?>">CONFIRM</a> 				
			</td>
		</tr>
		<?php } ?>
	</table>
	<a class='logout' href='..\logout.php'>LOGOUT</a>
</body>
</html>