<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo4</title>
</head>
<body>
    <?php
        const N=10;
        const X="hello world";
        const A=array("mot","hai","ba","bon","nam");
        for($i=0;$i<count(A);$i++){
            if (A[$i]==N){
                echo "Có phần tử trong mảng tương ứng";
            }else{
                echo "Không có phần tử nào tương ứng";
            }
        }
    ?>
</body>
</html>