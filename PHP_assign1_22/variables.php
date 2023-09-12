<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>

<body>
    <h3>Variables :</h3>
    <?php 
        $company = "Microsoft";
        $number = 4506;
        $pi = 3.14159265359;
        $is_admin = true;
        $city = null;
        $colors = array("red", "blue", "black", "pink", "white", "grey", "yellow");

        var_dump($company);
        echo "<br>";
        var_dump($number);
        echo "<br>";
        var_dump($pi);
        echo "<br>";
        var_dump($is_admin);
        echo "<br>";
        var_dump($city);
        echo "<br>";
        print_r($colors);
    ?>
</body>

</html>

