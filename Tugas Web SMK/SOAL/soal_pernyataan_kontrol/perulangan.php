<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penerapan perulangan for dan break </title>
</head>
<body>
    <?php
        $ulangan = "Ulangan di rumah dulu gan";
        $lebaran = "libur lebaran gan, belajar mulu";
        for ($belajar=1; $belajar <=100 ; $belajar++) { 
            switch ($belajar) {
                case 21:
                    print("ke sekolah mengambil kartu peserta PAS <br/>");
                    break 1;
                case 24:
                    print("$ulangan <br/>");
                    break;
                case 25:
                    print("$ulangan <br/>");
                    break;
                case 26:
                        print("$ulangan <br/>");
                    break;
                case 27:
                        print("$ulangan <br/>");
                    break;
                case 28:
                    print("$ulangan <br/>");
                    break;
                case 81:
                    print("$lebaran <br/>");
                    break;
                case 82:
                    print("$lebaran <br/>");
                    break;
                case 83:
                    print("$lebaran <br/>");
                    break;
                case 84:
                    print("$lebaran <br/>");
                    break;
                case 85:
                    print("$lebaran <br/>");
                    break;
                case 86:
                    print("$lebaran <br/>");
                    break 2;
                default:
                    print("belajar di rumah hari ke-$belajar <br/>");
                    break;
            }
        }
    ?>
</body>
</html>