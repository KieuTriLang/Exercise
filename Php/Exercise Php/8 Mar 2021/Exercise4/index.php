<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 4</title>
</head>

<body>
    <?php
    $codeProduct = "EV2009";
    $nameProduct = "Tấm hợp kim nhôm ngoài trời $codeProduct";
    $quantity = 500;
    $price = 160000;
    $VAT = 0.05;

    echo "Mã sản phẩm: $codeProduct <br>";
    echo "Tên sản phẩm: $nameProduct <br>";
    echo "Số lượng: $quantity <br>";
    echo "Giá tiền: $price <br>";
    echo "Thuế VAT: $VAT <br>";
    echo "Giá tiền trước khi trừ thuế là: " . ($quantity * $price) . "<br>";
    echo "Giá tiền sau khi trừ thuế là: " . ($quantity * $price - $quantity * $price * $VAT);
    ?>
</body>

</html>