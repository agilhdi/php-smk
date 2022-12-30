<?php
    session_start();
    include"koneksi.php";
    $username   = $_POST['username'];
    $password   = md5($_POST['password']);
    $query      = mysqli_query("select * from tbadmin where username='$username' and password='$password'");

    $cek        = mysqli_enum_rows($query);
    if ($cek) {
        $_SESSION['username']=$username;
?>
anda berhasil login. silahkan menuju <br/><br/>
<center>
    <b>
        <font size="16px">
            Halaman BERANDA 
        </font>
    </b>
</center>
<?php
    }else{
?>
Anda gagal login. silahkan 
<a href="index.html">Login kembali</a>
<?php
    echo mysqli_error();
    }
?>