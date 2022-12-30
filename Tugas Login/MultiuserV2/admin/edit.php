<?php include('../config/koneksi.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>halaman edit</title>
	<!-- CSS Bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- CSS kita -->
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
	<body>
		
			<!-- header -->
			<section>
				<nav class="navbar navbar-primary bg-primary">
					<a href="home.php" class="navbar-brand" style="color: white;">ADMIN</a>
					<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav">
						<li class="nav-item dropdown d-sm-block d-md-none">
						<a class="nav-link dropdown-toggle" href="#" id="smallerscreenmenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Menu
						</a>
						<div class="dropdown-menu" aria-labelledby="smallerscreenmenu">
							<a class="dropdown-item" href="#">Aksi</a>
							<a class="dropdown-item" href="#">Profile</a>
						</div>
						</li>
						
					</ul>
					</div>
				</nav>
			</section>
			<!-- Akhir Header -->

      		<div class="row" id="body-row">
			
			<!-- Awal Sidebar -->
			<section>
				<div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
					<ul class="list-group">
						<li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
						</li>
						<a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
							<div class="d-flex w-100 justify-content-start align-items-center">
								<span class="menu-collapsed">aksi</span>
							</div>
						</a>
						<div id='submenu1' class="collapse sidebar-submenu">
							<a href="tambah.php" class="list-group-item list-group-item-action bg-dark text-white">
								<span class="menu-collapsed">tambah</span>
							</a>
							<a href="home.php" class="list-group-item list-group-item-action bg-dark text-white">
								<span class="menu-collapsed">data pengguna</span>
							</a>
						</div>
						<a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
							<div class="d-flex w-100 justify-content-start align-items-center">
								<span class="menu-collapsed">profil</span>
							</div>
						</a>
						<div id='submenu2' class="collapse sidebar-submenu">
							<a href="../logout.php" class="list-group-item list-group-item-action bg-dark text-white" onclick="return confirm('Anda yakin akan keluar?')">
								<span class="menu-collapsed">keluar</span>
							</a>
						</div>            
						
					</ul>
				</div>
			</section>
			<!--  Akhir Sidebar -->
        
			<!-- Awal konten kita-->
					<div class="col">
						<h2 style="margin-top: 10px;">Edit User</h2>
						<?php
						//jika sudah mendapatkan parameter GET id dari URL
						if(isset($_GET['id'])){
							//membuat variabel $id untuk menyimpan id dari GET id di URL
							$id = $_GET['id'];
							
							//query ke database SELECT tabel user berdasarkan id = $id
							$select = mysqli_query($koneksi, "SELECT * FROM user WHERE id='$id'") or die(mysqli_error($koneksi));
							
							//jika hasil query = 0 maka muncul pesan error
							if(mysqli_num_rows($select) == 0){
								echo '<div class="alert alert-warning">ID tidak ada dalam database.</div>';
								exit();
							//jika hasil query > 0
							}else{
								//membuat variabel $data dan menyimpan data row dari query
								$data = mysqli_fetch_assoc($select);
							}
						}
						?>
						
						<?php
						//jika tombol simpan di tekan/klik
						if(isset($_POST['submit'])){
							$id		= $_POST['id'];
							$username		= $_POST['username'];
							$password		= md5($_POST['password']);
							$level			= $_POST['level'];
							
							$sql = mysqli_query($koneksi, "UPDATE user SET id='$id', level='$level', username='$username', password='$password' WHERE id='$id'") or die(mysqli_error($koneksi));
							
							if($sql){
								echo '<script>alert("Berhasil mengedit data."); document.location="home.php?id='.$id.'";</script>';
							}else{
								echo '<script>alert("Gagal melakukan proses edit data.""); document.location="home.php";</script>';
							}
						}
						?>
						
						<form action="edit.php?id=<?php echo $id; ?>" method="post" style="width: 60%;">
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">ID STAFF</label>
								<div class="col-sm-10">
									<input type="text" name="id" class="form-control" value="<?php echo $data['id']; ?>" readonly required>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">USERNAME</label>
								<div class="col-sm-10">
									<input type="text" name="username" class="form-control" value="<?php echo $data['username']; ?>" required>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">PASSWORD</label>
								<div class="col-sm-10">
									<input type="text" name="password" class="form-control" required>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">LEVEL</label>
								<div class="col-sm-10">
									<select name="level" class="form-control" required>
										<option value="">PILIH LEVEL</option>
										<option value="admin" <?php if($data['level'] == 'admin'){ echo 'selected'; } ?>>admin</option>
										<option value="guru" <?php if($data['level'] == 'guru'){ echo 'selected'; } ?>>guru</option>
										<option value="siswa" <?php if($data['level'] == 'siswa'){ echo 'selected'; } ?>>siswa</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">&nbsp;</label>
								<div class="col-sm-10">
									<input type="submit" name="submit" class="btn btn-primary" value="SIMPAN">
									<a href="home.php" class="btn btn-warning">KEMBALI</a>
								</div>
							</div>
						</form>
					</div>
			<!-- Akhir Konten kita -->
				   
        </div>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	</body>
</html>