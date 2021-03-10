<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise3</title>
</head>

<body>
    <?php
    $sum = 0;
    $i = 1;
    while ($i <= 100) {
        $sum += $i;
        $i++;
    }
    echo "tổng từ 1 đến 100: $sum <br>";
    echo "số chia hết cho 3 trong khoảng 20-50 <br>";
    $j = 20;
    while ($j <= 50) {
        if ($j % 3 == 0) {
            echo "$j <br>";
        }
        $j++;
    }
    ?>
</body>

</html>