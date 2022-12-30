<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh untuk memperlihatkan efek continue</title>
</head>
<body>
    <?php
        for ($i=1; $i<=25; $i++) 
        { 
            if ($i >= 10 and $i <= 15) 
                continue;
                print("$i <br/>");
                $i++;
        }  
    ?>
</body>
</html>