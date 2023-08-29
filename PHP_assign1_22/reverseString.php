<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reverse String</title>
</head>

<body>
    <?php
        $message="elgoog morf margorp siht deipoc ton evah eW";
        $length = strlen($message);
        $reverse_message = $message;

        for($i=0; $i<$length/2; $i++){
            $temp = $reverse_message[$i];
            $reverse_message[$i] = $reverse_message[$length-$i-1];
            $reverse_message[$length-$i-1] = $temp;
        }

        echo "Current String : $message<br>";
        echo "Reverse String : $reverse_message";
    ?>
</body>

</html>
