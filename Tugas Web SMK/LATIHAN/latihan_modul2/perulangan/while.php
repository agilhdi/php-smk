<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan bilangan 1 - 25</title>
</head>
<body>
    <?php
        $bilangan = 1;
        while ($bilangan <= 25) {
            print("$bilangan <br/>");
            $bilangan++;
        }
    ?>
</body>
</html>