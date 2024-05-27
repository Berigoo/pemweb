<?php

include_once("./db.php");
$query = mysqli_query($db, "SELECT * FROM buku");

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Aplikasi Perpustakaan</title>
	</head>

	<body>
		<h1>Daftar Buku</h1>
		<table>
		<tr>
			<th>ID</th>
			<th>Nama</th>
			<th>ISBN</th>
			<th>unit</th>
		</tr>
		<?php foreach($query as $data){ ?>
		<tr>
			<td><?php echo $data["id"]; ?></td>
			<td><?php echo $data["nama"]; ?></td>
			<td><?php echo $data["isbn"]; ?></td>
			<td><?php echo $data["unit"]; ?></td>
			<td>
				<a href="./edit_buku.php?id=<?php echo $data["id"] ?>">Edit</a>
			</td>
			<td>
				<a href="./del_buku.php?id=<?php echo $data["id"] ?>">Delete</a>
			</td>
		</tr>
		<?php } ?>
		</table>
		<br><br>
		<a href="./add_buku.php">Tambah Buku</a>
		<a href="/index.php">Home</a>

	</body>
</html>
