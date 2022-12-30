<?php
//memasukkan file koneksi.php
include('../config/koneksi.php');
session_start();
// cek apakah yang mengakses halaman ini sudah login
if($_SESSION['level']==""){
	header("location:../index.php?pesan=belum_login");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halo <?php echo $_SESSION['username']; ?> - halaman admin</title>
	<!-- CSS Bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- CSS kita -->
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
	<body>
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
                    <a class="dropdown-item" href="#">Aksi</a>
                    <a class="dropdown-item" href="#">Profil</a>
                </div>
                </li>
                
            </ul>
            </div>
        </nav>
        <!-- Akhir Header -->

        <div class="row" id="body-row">

			<!-- Sidebar -->
			<section>
				<div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
					<ul class="list-group">
						<li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
							<small>selamat datang <?php echo $_SESSION['username']; ?>, anda <?php echo $_SESSION['level']; ?></small>
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
								<span class="menu-collapsed">segarkan</span>
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
			<!-- Akhir Sidebar -->
        
       		<!-- konten -->
			<div class="col">
				<h2 style="margin-top: 10px;">Data user</h2>
				<table class="table table-striped table-hover table-sm table-bordered" style="text-align: center; margin-top:15px;">
					<thead class="thead-dark">
						<tr>
							<th>NO</th>
							<th>USERNAME</th>
							<th>PASSWORD</th>
							<th>LEVEL</th>
							<th>AKSI</th>
						</tr>
					</thead>
					<tbody style="background-color:white;">
						<?php
						//query ke database SELECT tabel mahasiswa urut berdasarkan id yang paling besar
							if(isset($_GET['cari'])){
							$cari = $_GET['cari'];
							echo "<b>Hasil pencarian : ".$cari." <a href='index.php'>(klik untuk refresh)</a> </b>";
							$sql = mysqli_query($koneksi, "SELECT * FROM user where username  LIKE '%$cari%' or 
																					password LIKE '%$cari%'");
							}else{
						$sql = mysqli_query($koneksi, "SELECT * FROM user ORDER BY id DESC") or die(mysqli_error($koneksi));
						}
						//jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
						if(mysqli_num_rows($sql) > 0){
							//membuat variabel $no untuk menyimpan nomor urut
							$no = 1;
							//melakukan perulangan while dengan dari dari query $sql
							while($data = mysqli_fetch_assoc($sql)){
								//menampilkan data perulangan
								echo '
								<tr>
									<td>'.$no.'</td>
									<td>'.$data['username'].'</td>
									<td>'.$data['password'].'</td>
									<td>'.$data['level'].'</td>
									<td>
										<a href="edit.php?id='.$data['id'].'" class="badge badge-success"><i class="far fa-edit"></i> edit</a>
										<a href="delete.php?id='.$data['id'].'" class="badge badge-danger" onclick="return confirm(\'Yakin ingin menghapus data ini?\')"><i class="far fa-trash-alt"></i> hapus</a>
									</td>
								</tr>
								';
								$no++;
							}
						//jika query menghasilkan nilai 0
						}else{
							echo '
							<tr>
								<td colspan="6">Tidak ada data.</td>
							</tr>
							';
						}
						?>
					<tbody>
				</table>
			</div>
       		<!-- Akhir Konten -->
            </div>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	</body>
</html>