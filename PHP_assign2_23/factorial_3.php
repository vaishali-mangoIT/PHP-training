<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>

<body>
    <?php
        ini_set('display_errors', 1);
        error_reporting(E_ALL);

        $number = 7;
        $result = factorial($number);
        echo "Factorial of number $number is : $result";

        function factorial($number){
            if ($number == 1 || $number == 0){
                return 1;
            } else if($number < 0){
                return "Not defined factorial!!";
            } else{
                return $number * factorial($number - 1);
            }
        }
    ?>
</body>

</html>