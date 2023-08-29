<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>

<body>
    <?php 
        $number = 10;
        echo "Table of number $number using for loop:<br>";
        for($i=1; $i<=10; $i++){
            echo "$number * $i =".($number * $i)."<br>";
        }

        echo "<br>Table of number $number using while loop:<br>";
        $i=1;
        while($i<=10){
            echo "$number * $i =".($number * $i)."<br>";
            $i++;
        }
        
        echo "<br>Table of number $number using do while loop:<br>";
        $i=1;
        do{
            echo "$number * $i =".($number * $i)."<br>";
            $i++;
        }while($i<=10);
    ?>
</body>

</html>