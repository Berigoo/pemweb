<?php 
include_once("./db.php");

$id = $_GET["id"];

$query = mysqli_query($db, "DELETE FROM buku WHERE id=$id");

header("Location: ./buku.php", true, 301);

?>
