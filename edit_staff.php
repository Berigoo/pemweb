<?php 
include_once("./db.php");

$id = $_GET["id"];

$query = mysqli_query($db, "SELECT * FROM staff WHERE id=$id");
$staff = mysqli_fetch_assoc($query);

if(isset($_POST["submit"])){
	$nama = $_POST["nama"];
	$telp = $_POST["telp"];
	$email = $_POST["email"];

	$query2 = mysqli_query($db, "UPDATE staff SET name='$nama', telp='$telp', email='$email' WHERE id=$id");

	header("Location: ./staff.php");
	exit;
}

?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Edit Staff</title>
	</head>

	<body>
		<h1>Edit Staff</h1>

		<form action="" method="POST">

			<br>
			<label for="nama">Nama</label>
			<input type="text" id="nama" name="nama" value="<?php echo $staff["name"] ?>">

			<br>
			<label for="telp">Telp.</label>
			<input type="text" id="telp" name="telp" value="<?php echo $staff["telp"] ?>">

			<br>
			<label for="email">Email</label>
			<input type="text" id="email" name="email" value="<?php echo $staff["email"] ?>">

			<br>
			<button type="submit" name="submit">Submit</button>

		</form>
	</body>
</html>
