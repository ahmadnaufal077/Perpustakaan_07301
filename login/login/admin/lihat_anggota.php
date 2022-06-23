<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>anggota</title>
	<link rel="stylesheet" href="anggota_css.css">
</head>
<body>
	<div class="judul">		
		<h1>ANGGOTA</h1>
	</div>
	<br/>
	<table style="margin-left:auto;margin-right:auto" width="50%" class="table">
		<tr>
		 	<th>Nama anggota</th>
		 	<th>No telp anggota</th>
         	<th>Alamat anggota</th>		
		</tr>
		<?php 
		include '..\koneksi.php';
		$query           = "SELECT * FROM anggota";
		$select         = mysqli_query($koneksi, $query);
		while($data = mysqli_fetch_array($select)){
		?>
		<tr>
			<td><?php echo $data['nama_anggota']; ?></td>
			<td><?php echo $data['notelp_anggota']; ?></td>
			<td><?php echo $data['alamat_anggota']; ?></td>
			<td>
				<a class="update" href="update.php?id_anggota=<?php echo $data['id_anggota']; ?>">UPDATE</a> 				
			</td>
            <td>
				<a class="delete" href="delete.php?id_anggota=<?php echo $data['id_anggota']; ?>">DELETE</a> 				
			</td>
		</tr>
		<?php } ?>
	</table>
	<a class='logout' href='..\logout.php'>LOGOUT</a>
</body>
</html>