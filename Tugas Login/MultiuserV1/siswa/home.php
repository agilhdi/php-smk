<!DOCTYPE html>
<html>
<head>
	<title>Membuat login multiuser menggunakan MD5</title>
	<style>
		b{
			background-color: #1982c4;
		}
	</style>
</head>
<body>
	<?php 
	session_start();
	if($_SESSION['level']==""){
		header("location:../login/index.php?pesan=gagal");
	}
	?>
	<h1>Halaman siswa</h1>
	<p>Halo selamat datang <b><?php echo $_SESSION['username']; ?></b> anda adalah <b><?php echo $_SESSION['level']; ?></b></p>
	<button type="submit"><a href="../login/logout.php"style="text-decoration:none; color:black;" onClick="return confirm('apakah anda akan Logout?')">Logout</a></button>
</body>
</html>