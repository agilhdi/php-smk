<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh untuk memperlihatkan efek continue</title>
</head>
<body>
    <?php
        for ($i=1; $i <=5 ; $i++) { 
            print("Proses for. Iterasi ke-$i <br/>");

            for ($j=1; $j <=5 ; $j++) { 
                if ($j == 3) 
                    continue 1;
                    print($j);
            }
            print("<br/>");
        }
    ?>
</body>
</html>