<?php

include_once("./db.php");
$query = mysqli_query($db, "SELECT * FROM staff");

?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Aplikasi Perpustakaan</title>
	</head>

	<body>
		<h1>Daftar Staff</h1>

		<table>
		<tr>
			<th>ID</th>
			<th>nama</th>
			<th>telp</th>
			<th>email</th>
			<th></th>
		</tr>
		<?php foreach($query as $data){ ?>
		<tr>
			<td><?php echo $data["id"]; ?></td>
			<td><?php echo $data["name"]; ?></td>
			<td><?php echo $data["telp"]; ?></td>
			<td><?php echo $data["email"]; ?></td>
			<td>
				<a href="./edit_staff.php?id=<?php echo $data["id"] ?>">Edit</a>
			</td>
			<td>
				<a href="./del_staff.php?id=<?php echo $data["id"] ?>">Delete</a>
			</td>
		</tr>
		<?php } ?>
		</table>
		<br><br>
		<a href="./add_staff.php">Tambah Staff</a>
		<a href="./index.php">Home</a>
	</body>
</html>
