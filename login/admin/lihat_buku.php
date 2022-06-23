<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>buku</title>
	<link rel="stylesheet" href="anggota_css.css">
</head>
<body>
	<div class="judul">		
		<h1>BUKU</h1>
	</div>
	<br/>
	<table style="margin-left:auto;margin-right:auto" width="50%" class="table">
		<tr>
		 	<th>Isbn</th>
		 	<th>Penebit buku</th>
         	<th>Genre buku</th>
            <th>Judul buku</th>
            <th>Penulis buku</th>
            <th>Tahun terbit</th>		
		</tr>
		<?php 
		include '..\koneksi.php';
		$join           = "SELECT * FROM genre inner join penerbit inner join buku
                            on penerbit.id_penerbit = buku.id_penerbit
                            on genre.id_genre = buku.id_genre";
		$select         = mysqli_query($koneksi, $join);
		while($data = mysqli_fetch_array($select)){
		?>
		<tr>
			<td><?php echo $data['isbn']; ?></td>
			<td><?php echo $data['penerbit_buku']; ?></td>
			<td><?php echo $data['genre_buku']; ?></td>
            <td><?php echo $data['judul_buku']; ?></td>
            <td><?php echo $data['penulis_buku']; ?></td>
            <td><?php echo $data['tahun_terbit']; ?></td>
			<td>
				<a class="delete" href="delete_buku.php?isbn=<?php echo $data['isbn']; ?>">DELETE</a> 				
			</td>
		</tr>
		<?php } ?>
	</table>
	<a class='logout' href='..\logout.php'>LOGOUT</a>
</body>
</html>