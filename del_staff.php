<?php 
include_once("./db.php");

$id = $_GET["id"];

$query = mysqli_query($db, "DELETE FROM staff WHERE id=$id");

header("Location: ./staff.php", true, 301);

?>
