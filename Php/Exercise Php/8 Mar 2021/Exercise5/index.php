<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 5</title>
</head>

<body>
    <?php
    $Kwh = 50;
    $bill = 0;
    switch ($Kwh) {
        case ($Kwh > 100 and $Kwh <= 200):
            $bill += (100 * 450 + ($Kwh - 100) * 600);
            break;
        case ($Kwh > 200 and $Kwh <= 300):
            $bill += (100 * 450 + 100 * 600 + ($Kwh - 200) * 750);
            break;
        case ($Kwh > 300 and $Kwh <= 500):
            $bill += (100 * 450 + 100 * 600 + 100 * 750 + ($Kwh - 300) * 900);
            break;
        case ($Kwh > 500 and $Kwh <= 1000):
            $bill += (100 * 450 + 100 * 600 + 100 * 750 + 200 *900 + ($Kwh - 500) * 1000);
            break;
        case ($Kwh > 1000):
            $bill += (100 * 450 + 100 * 600 + 100 * 750 + 200 *900 + 500 * 1000 + ($Kwh - 1000) * 1200);
            break;
        default:
            $bill+=$Kwh*450;
    }
    echo "Số điện đã tiêu thụ là: $Kwh <br>";
    echo "Tiền điện chưa tính thuế VAT: $bill <br>";
    echo "Tiền điện đã tính thuế VAT: ".($bill+$bill*0.1);
    ?>
</body>

</html>