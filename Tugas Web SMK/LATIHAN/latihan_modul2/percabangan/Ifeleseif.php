<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan menentukan nama hari</title>
</head>
<body>
    Hari ini :
        <?php
            $nama_hari = date("1");
            if ($nama_hari == "sunday")
                print("minggu");
            elseif ($nama_hari == "monday")
                print("senin");
            elseif ($nama_hari == "tuesday")
                print("selasa");
            elseif ($nama_hari == "wednesday")
                print("rabu");
            elseif ($nama_hari == "thursday")
                print("kamis");
            elseif ($nama_hari == "friday")
                print("jum'at");    
            else
                print("sabtu");
        ?>
</body>
</html>