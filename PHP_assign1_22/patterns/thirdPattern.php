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
        $rows = 17;
        $col = ($rows/2)+1;

        for($i=1; $i<=$rows; $i++){
            if($i<=$col){
                for($j=1; $j<=$i; $j++){
                    echo "* ";
                }
            } 
            else{
                for($k=1; $k<($col*2-$i); $k++){
                    echo "* ";
                }
            }
            echo "<br>";
        }
    ?>
</body>

</html>
