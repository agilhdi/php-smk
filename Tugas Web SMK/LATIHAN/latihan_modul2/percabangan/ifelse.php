<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh penetuan diskon</title>
</head>
<body>
    <form name="theform" method="get" action="ifelse.php">
        Besar pembelian :
        <input type="text" name="total_beli"><br/><br/>
        <input type="submit" value="Tentukan Diskon">
    </form>

    <?php
        // if(ISSET($total_beli)){
        //     $total_beli = intval($total_beli);
        //     $diskon=0;
        //     if ($total_beli>=100000)
        //         $diskon = intval(0.1 * $total_beli);
        //     printf("Diskon = %d <br/> ", $diskon);
        //     printf("Pembayaran = %d <br/> ", $total_beli - $diskon);
        // }
        $total_beli = $_GET["total_beli"];
        echo "Harga asal : " .$total_beli. "<br/>";
        $harga_diskon = $total_beli * 10/100;
        echo "Total diskon :" .$harga_diskon;
        echo "<br />";
        echo "Harga total : " .$total_beli - $harga_diskon;
    ?>
</body>
</html>