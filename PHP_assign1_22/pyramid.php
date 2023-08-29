<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pyramid</title>
</head>

<body>
    <?php
        $rows = 4;
        echo "Pyramid:<br><br>";

        for ($i=1; $i<=$rows; $i++) {
            for($space=1; $space<=$rows-$i; $space++){
                echo "&nbsp&nbsp";
            }   
            for($j=1; $j<2*$i; $j++){
                echo "*";
            } 
            echo "<br>"; 
        } 
    ?>
</body>

</html>