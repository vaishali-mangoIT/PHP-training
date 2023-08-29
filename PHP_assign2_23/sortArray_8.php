<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sort Array</title>
</head>

<body>
    <?php
        $age = array(34, 23, 92, 89, 17, 47, 39, 87);
        echo "<pre>";
        echo "Before Sorting :<br><br>";
        print_r($age);
        sort($age);
        echo "<br>Ater Sorting:<br><br>";
        print_r($age);
    ?>
</body>

</html>