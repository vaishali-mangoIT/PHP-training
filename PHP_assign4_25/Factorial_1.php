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

        class Factorial{
            private $number;
            function get_factorial($number){
                $this->number = $number;
                $flag = 1;
                for($i=$this->number; $i>=1; $i--){
                    $flag = $flag * $i;
                }
                return $flag;
            }
        }
        $factorial = new Factorial();
        echo "<br>Factorial of 5 is : ".$factorial->get_factorial(5);
    ?>
</body>

</html>