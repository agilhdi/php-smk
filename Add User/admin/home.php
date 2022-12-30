<!DOCTYPE html>
<html>
<head>
	<title>Membuat login multiuser menggunakan MD5</title>
</head>
<body>
	<?php 
	session_start();
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:../login/index.php?pesan=gagal");
	}
	?>
	<!-- Tambah data -->
	<div class="tambah">
		<h3>Tambah pengguna</h3>  
		<form method="post" action="tambah_aksi.php">
			<table>
				<tr>
					<td>Username</td>
					<td>: <input type="text" name="username"></td>
				</tr>
				<tr>			
					<td>Password</td>
					<td>: <input type="password" name="password"></td>
				</tr>
				<tr>
					<td>Level</td>
					<td>
						: <select name="level" >
							<option value="">Pilih level</option>
							<option value="admin">admin</option>
							<option value="guru">guru</option>
							<option value="siswa">siswa</option>
						</select>
					</div>
					</td>
				</tr>
			</table>
			<br>
			<input type="submit" value="Tambah" onClick="return confirm('User berhasil ditambahkan')"/>
			<button type="submit"><a href="../login/logout.php"style="text-decoration:none; color:black;" 
			onClick="return confirm('apakah anda akan Logout?')">Logout</a></button>
	 	</form>
	 </div>
	<!-- akhir tambah data -->


	 <hr>
	 <h3>Data pengguna</h3>
	<table class="lihat" border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No</th>
			<th>username</th>
			<th>password</th>
			<th>level</th>
			<th>Opsi</th>		
		</tr>
		<?php 
		include "../config/koneksi.php";
		$query_mysql = mysqli_query($koneksi, "SELECT * FROM user ORDER BY id DESC") or die(mysqli_error($koneksi));
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['username']; ?></td>
			<td><?php echo $data['password']; ?></td>
			<td><?php echo $data['level']; ?></td>
			<td>
				<!-- <a href="edit.php?id=<?php //echo $data['id']; ?>">Edit</a> | -->
				<a class="hapus" href="hapus.php?id=<?php echo $data['id']; ?>" 
				onClick="return confirm('apakah anda akan menghapus <?php echo $data['username']; ?>?')">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
	</table>
	</body>
</html>