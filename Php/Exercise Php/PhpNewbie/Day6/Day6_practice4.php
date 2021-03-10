<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day6-Practice4</title>
</head>
<style>
    table,tr,td {
        border:1px solid black;
        border-collapse:collapse;
    }
</style>
<body>
    <table>
        <?php
            for($i=1; $i <=6;$i++) {
                echo "<tr>";
                for($j=1; $j <= 5; $j++) {
                    echo "<td>";
                    echo "$i x $j =".($i*$j);
                    echo "</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>