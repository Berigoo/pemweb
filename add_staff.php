<?php
include_once("./db.php");

if(isset($_POST["submit"])){
	$nama = $_POST["nama"];
	$telp = $_POST["telp"];
	$email = $_POST["email"];

	$query = mysqli_query($db, "INSERT INTO staff VALUES(NULL, '$nama', '$telp', '$email')");

	header("Location: ./staff.php");
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Tambah Staff</title>
	</head>

	<body>
		<h1>Tambah Staff</h1>

		<form action="" method="POST">

			<br>
			<label for="nama">Nama</label>
			<input type="text" id="nama" name="nama">

			<br>
			<label for="telp">Telp.</label>
			<input type="text" id="telp" name="telp">

			<br>
			<label for="email">Email</label>
			<input type="text" id="email" name="email">

			<br>
			<button type="submit" name="submit">Submit</button>

		</form>
	</body>
</html>
