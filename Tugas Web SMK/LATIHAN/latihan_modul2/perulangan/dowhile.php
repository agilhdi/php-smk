<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilka bilangan 1 - 25</title>
</head>
<body>
    <?php
        $bilangan = 1;
        do{
            print("$bilangan <br/>");
            $bilangan++;
        }while($bilangan<26);
    ?>
</body>
</html>