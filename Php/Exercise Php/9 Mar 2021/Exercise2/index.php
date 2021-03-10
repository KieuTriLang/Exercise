<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise2</title>
</head>

<body>
    <?php
    $arr = array(4, 2, 35, 6, 9, 7, 12);
    $max = $arr[0];
    $min = $arr[0];
    $sum = 0;
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] > $max) {
            $max = $arr[$i];
        } elseif ($arr[$i] < $min) {
            $min = $arr[$i];
        }
        $sum += $arr[$i];
    }
    echo "max: $max <br>";
    echo "min: $min <br>";
    echo "avg: " . ($sum / count($arr)) . "<br>";
    ?>
</body>

</html>