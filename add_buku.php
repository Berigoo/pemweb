<?php
include_once("./db.php");

if(isset($_POST["submit"])){
	$nama = $_POST["nama"];
	$isbn = $_POST["isbn"];
	$unit = $_POST["unit"];

	$query = mysqli_query($db, "INSERT INTO buku VALUES(NULL, '$nama', '$isbn', $unit)");

	header("Location: ./buku.php");
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Tambah Buku</title>
	</head>

	<body>
		<h1>Tambah Buku</h1>

		<form action="" method="POST">

			<br>
			<label for="nama">Nama</label>
			<input type="text" id="nama" name="nama">

			<br>
			<label for="isbn">ISBN</label>
			<input type="text" id="isbn" name="isbn">

			<br>
			<label for="unit">Unit</label>
			<input type="number" id="unit" name="unit">

			<br>
			<button type="submit" name="submit">Submit</button>

		</form>
	</body>
</html>
