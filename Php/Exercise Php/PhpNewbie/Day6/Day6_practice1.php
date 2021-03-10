<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day6-Practice1</title>
</head>
<body>
    <?php
        const N=5;
        for ($i=1; $i<=N; $i++) {
            $gt=1;
            echo "$i!=";
            for($j=$i; $j>=1; $j--) {
                $gt*=$j;
            }
            echo "$gt <br>";
        }
    ?>
</body>
</html>