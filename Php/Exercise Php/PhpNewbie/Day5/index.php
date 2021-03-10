<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo5</title>
</head>
<body>
    <?php
        for ( $i=1 ; $i <= 100; $i++) {
            echo "$i ";
        }
        echo "<br>";
        $j=1;
        while ($j <=100){
            echo "$j ";
            $j++;
        }
        echo "<br>";
        $arr1=array(1,2,3,4,5,6,7,8,9,10);
        $arr2[0]=2;
        $arr2[1]=4;
        $arr2[2]=5;
        $arr2[3]=2;
        $arr2[4]=2;
        $arr2[5]=28;
        $arr2[6]=26;
        $arr2[7]=24;
        $arr2[8]=23;
        $arr2[9]=20;
        for ($i=0 ;$i<10;$i++){
            echo "$arr1[$i] ";
        }
        echo "<br>";
        $m=0;
        while($m<10){
            echo "$arr2[$m] ";
            $m++;
        }
    ?>
</body>
</html>