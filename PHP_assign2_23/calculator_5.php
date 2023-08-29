<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>

<body>
    <?php
        ini_set('display_errors', 1);
        error_reporting(E_ALL);

        $first_number = 100;
        $second_number = 25;
        $case = 3;

        switch($case){
            case 1 :
                $result = addition($first_number, $second_number);
                break;
            case 2 :
                $result = subtraction($first_number, $second_number);
                break;
            case 3 :
                $result = multiplication($first_number, $second_number);
                break;
            case 4 :
                $result = division($first_number, $second_number);
                break; 
            default :
                echo "Invalid Case!!";  
        }

        echo "Result is : $result";

        function addition($first_number, $second_number){
            return $first_number + $second_number;
        }
        function subtraction($first_number, $second_number){
            return $first_number - $second_number;
        }
        function multiplication($first_number, $second_number){
            return $first_number * $second_number;
        }
        function division($first_number, $second_number){
            if($second_number == 0){
                return "Divide by Zero is not allowed!!!";
            } else{
                return $first_number / $second_number;
            }
        }
    ?>
</body>

</html>