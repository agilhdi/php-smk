<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Efek pernytaan break</title>
</head>
<body>
    <?php
        for ($i=1; $i <=25 ; $i++) { 
            switch ($i) {
                case 5:
                    print("5 - break 1 <br/>");
                    break 1;
                case 7:
                    print("7 - break 2 <br/>");
                    break 2;
                default:
                    print("$i <br/>");
                    break;
            }
        }
        print("selesai <br/>");
    ?>
</body>
</html>