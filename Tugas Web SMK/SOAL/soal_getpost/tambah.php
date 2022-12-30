<?php 
include('config.php');
if(isset($_POST['tombol']))
{
    $temp = $_FILES['gambar']['tmp_name'];
    $name = rand(0,9999).$_FILES['gambar']['name'];
    $size = $_FILES['gambar']['size'];
    $type = $_FILES['gambar']['type'];
    $keterangan = $_POST['keterangan'];
    $folder = "files/";
    if ($size < 2048000 and ($type =='image/jpeg' or $type == 'image/png')) {
        move_uploaded_file($temp, $folder . $name);
        mysqli_query($koneksi, "insert into tb_gambar (gambar,keterangan,tipe_gambar,ukuran_gambar) values ('$name','$keterangan','$type','$size')");
        header('location:tambah.php');
    }else{
        echo "<b>Gagal Upload File</b>";
    }
}
?>
<html>
<head>
    <title>Tambah biodata siswa</title>
</head>
<body>
<b>Nama    : Agil abdulhadi mustofa</b> 
<br>
<b>Kelas   : XI RPL-A</b> 
<hr width="20.6%" align="left">
<form action="tambah.php" method="post" name="form" >
   <table>
       <tr>
           <td>Nama</td>
           <td> : <input type="text" name="nama" autocomplete="off" autofocus></td>
       </tr>
       <tr>
           <td>Alamat</td>
           <td> : <input type="text" name="alamat" autocomplete="off"></td>
       </tr>
       <tr>
           <td>Jenis kelamin</td>
           <td> 
               : <input type="radio" name="jenis_kelamin" value="Laki-laki">laki-laki
                 <input type="radio" name="jenis_kelamin" value="Perempuan">perempuan
           </td>
       </tr>
       <tr>
           <td style="vertical-align: baseline;">Jurusan</td>
           <td> 
               : <input type="radio" name="jurusan" value="TKR">TKR <br>
               &ensp;<input type="radio" name="jurusan" value="TEI">TEI <br>
               &ensp;<input type="radio" name="jurusan" value="TKI">TKI <br>
               &ensp;<input type="radio" name="jurusan" value="RPL">RPL <br>
               &ensp;<input type="radio" name="jurusan" value="TAV">TAV
       </tr>
       <tr>
           <td style="vertical-align: baseline;">Hobi</td>
           <td>
               : <input type="checkbox" name="hobi" value="basket">Basket <br>
               &ensp;<input type="checkbox" name="hobi" value="futsal">Futsal <br>
               &ensp;<input type="checkbox" name="hobi" value="renang">Renang <br>
               &ensp;<input type="checkbox" name="hobi" value="bersepeda">Bersepeda <br>
               &ensp;<input type="checkbox" name="hobi" value="berswisata">Berswisata
           </td>
       </tr>
       <tr>
            <td>File</td>
            <td>:&ensp;<input type="file" name="gambar"/></td>
        </tr>
       <tr>
            <td class="submit" colspan="2"><input type="submit" name="Submit" value="Tambah"></td>
       </tr>
   </table>
</form>  

<?php
    if(isset($_POST['Submit'])) {
        $nama=htmlspecialchars($_POST['nama']);
        $alamat=htmlspecialchars($_POST['alamat']);
        $jenis_kelamin=($_POST['jenis_kelamin']);
        $jurusan=($_POST['jurusan']);
        $hobi=($_POST['hobi']);
        $gambar=($_POST['gambar']);
        
        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO biodata(nama,alamat,jenis_kelamin,jurusan,hobi,gambar) 
                                            VALUES('$nama','$alamat','$jenis_kelamin','$jurusan','$hobi','$gambar')");

        // Show message when user added
        echo "Data Berhasil ditambahkan";
    } 
    ?>
    <b>©copyright agil</b>
</body>
</html>