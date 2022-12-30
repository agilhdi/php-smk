<?php 
// koneksi database
include '../config/koneksi.php';

// menangkap data yang di kirim dari form
$username = $_POST['username'];
$password = md5($_POST['password']);
$level = $_POST['level'];

// menginput data ke database
mysqli_query($koneksi,"INSERT INTO user VALUES('','$username','$password','$level')");
// mengalihkan halaman kembali ke index.php
header("location:home.php");

?>