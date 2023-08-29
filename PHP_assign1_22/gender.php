<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gender Selection</title>
</head>

<body>
    <?php
        $value = "hmale";

        switch($value){
        case "male":{
            echo "Gender selected is - $value";
            break;
        }
        case "female":{
            echo "Gender selected is - $value";
            break;
        }
        default : 
            echo "Select Gender....";   
        }
    ?>
</body>

</html>