<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 9</title>
</head>
<style>
    table,
    td,
    tr {
        border: 1px solid black;
    }

    td {
        width: 30px;
        height: 30px;
    }

    .bg-lightgreen {
        background-color: lightgreen;
    }
</style>

<body>
    <table>
        <?php
        for ($i = 0; $i < 10; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 10; $j++) {
                $count = 0;
                for ($k = 2; $k <= sqrt($i * 10 + $j); $k++) {
                    if (($i * 10 + $j) % $k == 0) {
                        $count++;
                    }
                }
                if ($i * 10 + $j < 2) {
                    echo "<td>" . ($i * 10 + $j) . "</td>";
                } elseif ($count == 0) {
                    echo "<td class='bg-lightgreen'>" . ($i * 10 + $j) . "</td>";
                } else {
                    echo "<td>" . ($i * 10 + $j) . "</td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>

</body>

</html>