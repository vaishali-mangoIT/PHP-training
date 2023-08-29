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
        
        echo("$company : <b>This value data type is String</b><br><br>");
        echo("$number : <b>This value data type is Integer</b><br><br>");
        echo("$pi : <b>This value data type is Float</b><br><br>");
        echo("$is_admin : <b>This value data type is Boolean</b><br><br>");
        echo("$city : <b>This value data type is Null</b><br><br>");
        echo "Color's name: Array data type<br>";
        foreach ($colors as $index => $value) {
            echo $index ."->" .$value."<br>";
        }
         
    ?>
</body>

</html>
