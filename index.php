<?php
session_start();
if(!isset($_SESSION["email"])){
	header('Location: /login.html');
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Aplikasi Perpustakaan</title>
	</head>

	<body>
		<h1>Aplikasi Perpustakaan</h1>

		<a href="./buku.php">Daftar Buku</a>
		<br>
		<a href="./staff.php">Daftar Staff</a>

    <br><br>
    <a href="/logout.php">Logout</a>
	</body>
</html>
