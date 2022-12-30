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
        switch ($nama_hari) {
            case "monday":
            case "tuesday":
            case "wednesday":
            case "thursday":
            case "friday":
                print("hari kerja");
                break;
            case "saturday":
            case "sunday":
                print("hari libur");
        }
    ?>
</body>
</html>