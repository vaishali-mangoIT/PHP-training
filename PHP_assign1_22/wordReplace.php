<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wordReplace</title>
</head>

<body>
    <?php
        $message = "I have been working as a position for X years.";
        $find = array("position", "X");
        $replace = array("Software Engineer", "7"); 
        
        echo "Current String : $message<br><br>";
        $updated_message = str_replace($find, $replace, $message);
        echo "Updated String : $updated_message";
    ?>
</body>

</html>