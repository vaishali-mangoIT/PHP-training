<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merge Array</title>
</head>

<body>
    <?php
        $color = array("Red", "Pink", "Blue", "Black", "White");
        $fruits = array("Mango", "Banana", "Papaya");
        
        echo "<pre>";
        print_r(array_merge($color, $fruits));  
    ?>
</body>

</html>