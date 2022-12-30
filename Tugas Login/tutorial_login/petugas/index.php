<?php
session_start();
if($_SESSION['level']=="admin") {
    header("Location: ../admin/index.php");
}

elseif ($_SESSION['level']=="") {
    header("Location: ../petugas/index.php");
}


?>
<!DOCTYPE html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>:: Tugas tutorial login multiuser ::</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Custom Css -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/authentication.css">
    <link rel="stylesheet" href="assets/css/color_skins.css">
</head>

<body class="theme-orange">
<div class="authentication">
    <div class="card">
        <div class="body">
            <h2>Tugas membuat login multiuser di tutorial youtube</h2>
            <h3>Agil abdulhadi, XII-RPLA</h3>
            <p>Halo <b><?php echo $_SESSION['username']; ?></b> selamat datang di halaman <b><?php echo $_SESSION['level']; ?></b>.</p>
            <a href="logout.php">Logout</a>
        </div>
    </div>
</div>

<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script>    
<script src="assets/bundles/vendorscripts.bundle.js"></script>
<script src="assets/bundles/mainscripts.bundle.js"></script>
</body>
</html>