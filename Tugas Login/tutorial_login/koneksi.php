<?php
$host = "localhost";
$user = "root";
$pass = "";
$namadb = "tutorial";

$conn = mysqli_connect($host, $user, $pass, $namadb);
if (!$conn) {
	die("Error".mysqli_connect_error());
}

?>	