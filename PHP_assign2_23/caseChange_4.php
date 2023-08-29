<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Case Change</title>
</head>

<body>
    <?php
        function changeCase($message, $upper=false){
            if($upper){
                return strtoupper($message);
            } else{
                return strtolower($message);
            }
        }
        $message = "This is Google!!";
        $lowerCase = changeCase($message);
        $upperCase = changeCase($message, true);
    
        echo "Message is : $message<br><br>";
        echo "In Uppercase : $upperCase<br><br>";
        echo "In Lowercase : $lowerCase<br><br>";
    ?>
</body>

</html>