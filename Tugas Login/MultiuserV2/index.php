<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login dulu bre !</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	

	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

	<link rel="stylesheet" type="text/css" href="assets/assets/vendor/animate/animate.css">
	
	<link rel="stylesheet" type="text/css" href="assets/vendor/css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="assets/vendor/animsition/css/animsition.min.css">

	<link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">
	
	<link rel="stylesheet" type="text/css" href="assets/vendor/daterangepicker/daterangepicker.css">

	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
<!--===============================================================================================-->	
</head>
<body>
<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "<script type='text/javascript'> alert('gagal asup! username jeung password na salah');</script>";
		} else if($_GET['pesan'] == "logout"){
			echo "<script type='text/javascript'> alert('anjeun tos logout');</script>";
		} else if($_GET['pesan'] == "belum_login"){
			echo "<script type='text/javascript'> alert('teu menang kitu! anjeun kudu login hela');</script>";
		}
	}
?>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(assets/images/bg-1.jpg);">
					<span class="login100-form-title-1">
						Log In
					</span>
				</div>

				<form action="cek_login.php" method="post" class="login100-form validate-form">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Username</span>
					 	  <input class="input100" type="text" name="username" placeholder="Masukan username" autofocus>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						  <input class="input100" type="password" name="password" placeholder="Masukan password">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn" style="margin-left: 18%;">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<section>
		<!--===============================================================================================-->
			<script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
		<!--===============================================================================================-->
			<script src="assets/vendor/animsition/js/animsition.min.js"></script>
		<!--===============================================================================================-->
			<script src="assets/vendor/bootstrap/js/popper.js"></script>
			<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
		<!--===============================================================================================-->
			<script src="assets/vendor/select2/select2.min.js"></script>
		<!--===============================================================================================-->
			<script src="assets/vendor/daterangepicker/moment.min.js"></script>
			<script src="assets/vendor/daterangepicker/daterangepicker.js"></script>
		<!--===============================================================================================-->
			<script src="assets/vendor/countdowntime/countdowntime.js"></script>
		<!--===============================================================================================-->
			<script src="assets/js/main.js"></script>
			<script>
				$('.message a').click(function(){
				$('form').animate({height: "toggle", opacity: "toggle"}, "slow");
				});
			</script>
	</section>
</body>
</html>