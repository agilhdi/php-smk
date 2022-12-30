<?php
//memasukkan file koneksi.php
include('../config/koneksi.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>halaman tambah</title>
	<!-- CSS Bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- CSS kita -->
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
	<body>
		<?php 
		session_start();
		// cek apakah yang mengakses halaman ini sudah login
		if($_SESSION['level']==""){
			header("location:../index.php?pesan=belum_login");
		}
		?>        
		<!-- Awal Header -->
        <nav class="navbar navbar-primary bg-primary">
			<a href="home.php" class="navbar-brand" style="color: white;">ADMIN</a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown d-sm-block d-md-none">
                <a class="nav-link dropdown-toggle" href="#" id="smallerscreenmenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Menu
                </a>
                <div class="dropdown-menu" aria-labelledby="smallerscreenmenu">
                    <a class="dropdown-item" href="#">aksi</a>
                    <a class="dropdown-item" href="#">profil</a>
                </div>
                </li>
                
            </ul>
            </div>
        </nav>
        <!-- Akhir Header -->

        <div class="row" id="body-row">
        <!-- Sidebar -->
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
        <!-- Akhir Sidebar -->
        
        <!-- Awal konten kita -->
				<div class="col">
					<h2 style="margin-top: 10px;">Tambah User</h2>
					<?php
					if(isset($_POST['submit'])){
						$username		= $_POST['username'];
						$password		= md5($_POST['password']);
						$level			= $_POST['level'];
						
						$cek = mysqli_query($koneksi, "SELECT * FROM user  WHERE id='$id'") or die(mysqli_error($koneksi));
						
						if(mysqli_num_rows($cek) == 0){
							$sql = mysqli_query($koneksi, "INSERT INTO user (username, password, level) VALUES ('$username', '$password', '$level')") or die(mysqli_error($koneksi));
							
							if($sql){
								echo '<script>alert("Berhasil menambahkan data."); document.location="home.php";</script>';
							}else{
								echo '<script>alert("Gagal melakukan proses tambah data.""); document.location="home.php";</script>';
							}
						}
					}
					?>
					
					<form action="tambah.php" method="post" style="width: 60%;">
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">USERNAME</label>
							<div class="col-sm-10">
								<input type="text" name="username" class="form-control" required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">PASSWORD</label>
							<div class="col-sm-10">
								<input type="password" name="password" class="form-control" required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">LEVEL</label>
							<div class="col-sm-10">
								<select name="level" class="form-control" required>
									<option value="">PILIH LEVEL</option>
									<option value="admin">admin</option>
									<option value="guru">guru</option>
									<option value="siswa">siswa</option>
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
        
            </div>
        <!-- Akhir Konten -->
        </div>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	</body>
</html>