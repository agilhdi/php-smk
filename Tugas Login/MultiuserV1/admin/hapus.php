<?php 
include '../config/koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM user WHERE id='$id'") or die(mysqli_error($koneksi));

header("location:home.php?pesan=hapus");
?>