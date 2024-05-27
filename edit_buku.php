<?php 
include_once("./db.php");

$id = $_GET["id"];

$query = mysqli_query($db, "SELECT * FROM buku WHERE id=$id");
$buku = mysqli_fetch_assoc($query);

if(isset($_POST["submit"])){
	$nama = $_POST["nama"];
	$isbn = $_POST["isbn"];
	$unit = $_POST["unit"];

	$query2 = mysqli_query($db, "UPDATE buku SET nama='$nama', isbn='$isbn', unit=$unit WHERE id=$id");

	header("Location: ./buku.php");
	exit;
}

?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Edit Buku</title>
	</head>

	<body>
		<h1>Edit Buku</h1>

		<form action="" method="POST">

			<br>
			<label for="nama">Nama</label>
			<input type="text" id="nama" name="nama" value="<?php echo $buku["nama"] ?>">

			<br>
			<label for="isbn">ISBN</label>
			<input type="text" id="isbn" name="isbn" value="<?php echo $buku["isbn"] ?>">

			<br>
			<label for="email">Unit</label>
			<input type="number" id=unit" name="unit" value="<?php echo $buku["unit"] ?>">

			<br>
			<button type="submit" name="submit">Submit</button>

		</form>
	</body>
</html>
