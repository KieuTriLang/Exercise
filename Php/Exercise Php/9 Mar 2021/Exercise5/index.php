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
    $string1 = "rayy@gmail.com";
    $string2 = "rayy";
    $result = "";
    for ($i = 0; $i < strlen($string1); $i++) {
        $result .= $string1[$i];
        if ($i == strlen($string2) - 1) {
            break;
        }
    }
    echo "chuỗi cần lấy là: $result";
    ?>
</body>

</html>