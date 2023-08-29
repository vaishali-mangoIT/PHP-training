<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word Positon</title>
</head>

<body>
    <?php
        $message = "It was a very enriching experience at the University as not only we were actively involved in practical projects";
        $pos = strpos($message, "experience");
        echo "Position of experience word in given string is : $pos";
    ?>
</body>

</html>
