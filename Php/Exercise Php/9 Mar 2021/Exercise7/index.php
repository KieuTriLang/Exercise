<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day6-Practice5</title>
</head>
<style>
    table,
    tr,
    td {
        border: 1px solid black;
    }

    td {
        width: 20px;
        height: 20px
    }

    .black-cell {
        background-color: black;
    }
</style>

<body>
    <table>
        <?php
        for ($i = 0; $i < 8; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 8; $j++) {
                if ($i % 2 == 0 && $j % 2 == 1) {
                    echo '<td class="black-cell"></td>';
                } elseif ($i % 2 == 1 && $j % 2 == 0) {
                    echo '<td class="black-cell"></td>';
                } else {
                    echo '<td></td>';
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>