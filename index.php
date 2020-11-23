<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>
	<center>
		<h2><font color="PINK">DATA MAHASISWA PRODI SISTEM INFORMASI </font></h2>
		<br/>
		<a href="Tambah.php">Tambah</a>
		<br/>
		<br/>
		<table border="1">
			<tr>
				<th> NO </th>
				<th> Nama </th>
				<th> NIM </th>
				<th> OPSI </th>
			</tr>
			<?php
			include "koneksi.php";
			$no = 1;
			$data = mysqli_query($koneksi,"select * from mahasiswa");
			while($d =mysqli_fetch_array($data)){
				?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $d['nama']; ?></td>
					<td><?php echo $d['nim']; ?></td>
					<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">Edit</a> ||
					<a href="Hapus.php?id=<?php echo $d['id']; ?>">Hapus</a> 
					</td>
					</tr>
					<?php

		}
		?>
		</table>
</body>
</html>