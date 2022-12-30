<!DOCTYPE html>
<html>
<head>
	<title>Login!</title>
</head>
<body>
	<h1>Login multiuser menggunakan MD5</h1>
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<script type='text/javascript'> alert('username & kata sandi salah');</script>";
		}
	}
	?>
	<b>Silahkan login</b>
		<form action="proses_login.php" method="post">
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" class="form_login" placeholder="Username .." required="required"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" class="form_login" placeholder="Password .." required="required"></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" value="LOGIN"></td>
				</tr>
			</table>
		</form>
</body>
</html>