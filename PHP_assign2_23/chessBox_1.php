<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess Box</title>
    <style>
        .white {
            background-color: white;
        }

        .black {
            background-color: black;
        }

        td {
            width: 45px;
            height: 45px;
            border: 1px solid black;
        }

        table {
            border: 1px solid black;
            border-collapse: collapse;
            margin: 30px;
        }

        h2 {
            color: brown;
        }
    </style>
</head>

<body>
    <?php
        echo "<h2>Chess Box :</h2>";
        echo "<table>";
        for ($i = 0; $i < 8; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 8; $j++) {
                if (($i + $j) % 2 == 0){
                    echo "<td class='black'></td>";
                } else{
                    echo "<td class='white'></td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>

</html>