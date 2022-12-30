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
        $nama_hari = date("3");
        switch ($nama_hari) {
            case "sunday":
                print("minggu");
                break;
            case "monday":
                print("senin");
                break;
            case "tuesday":
                print("selasa");
                break;
            case "wednesday":
                print("rabu");
                break;
            case "thursday":
                print("kamis");
                break;
            case "friday":
                print("juma'at");
                break;
            default:
                print("sabtu");
        }
    ?>
</body>
</html>