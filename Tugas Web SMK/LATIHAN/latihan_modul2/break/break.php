<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh untuk memperlihatkan efek break</title>
</head>
<body> 
    <?php
        for ($i=1; $i <=25 ; $i++) { 
            print("$i <br/>");
            if ($i == 10)
            break;
            }
            print("selesai <br/>");
    ?>
</body>
</html>