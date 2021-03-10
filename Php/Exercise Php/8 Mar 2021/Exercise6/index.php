<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 6</title>
</head>

<body>
    <?php
    $day = 4;
    switch ($day) {
        case 0:
            echo "Ngày thứ hai";
            break;
        case 1:
            echo "Ngày thứ ba";
            break;
        case 2:
            echo "Ngày thứ tư";
            break;
        case 3:
            echo "Ngày thứ năm";
            break;
        case 4:
            echo "Ngày thứ sáu";
            break;
        case 5:
            echo "Ngày thứ bảy";
            break;
        case 6:
            echo "Ngày thứ chủ nhật";
            break;
        default:
            echo "Không hợp lệ";
    }
    ?>
</body>

</html>