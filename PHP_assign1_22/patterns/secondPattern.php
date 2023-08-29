<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patterns</title>
</head>

<body>
    <?php
        echo "Pattern :<br><br>";
        $rows = 6;
        for($i=1; $i<=$rows; $i++){
            for($j=1; $j<=$rows+1-$i; $j++){
                echo "* ";
            }
            echo "<br>";
        }
    ?>
</body>

</html>