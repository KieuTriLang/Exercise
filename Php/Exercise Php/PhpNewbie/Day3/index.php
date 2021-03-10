<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day3</title>
</head>
<body>
    <?php
        $string="Trường Đại học Hà Nội, Học viện công nghệ thông tin – Hita";
        echo $string."<br>";
        echo str_word_count($string)."<br>";
        echo str_replace("học","***",$string);
    ?>
</body>
</html>