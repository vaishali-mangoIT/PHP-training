<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Operations</title>
</head>

<body>
    <?php
        $first_number = 100;
        $second_number = 10;
        $operation = "division";

        switch($operation){
            case "addition" : 
                $result = $first_number + $second_number;
                break;

            case "subtraction" : 
                $result = $first_number - $second_number;
                break;

            case "multiplication" : 
                $result = $first_number * $second_number;
                break;

            case "division" :{
                switch($second_number){
                    case 0:
                        $result = "Divide by zero is not defined";
                        break;
                    default: 
                        $result = $first_number / $second_number;
                        break;
                } 
                break;
            }
            
            default :
                $result = "You have performed an invalid Operation!!!";
        }
        echo "Result of $operation of $first_number and $second_number is : $result";
    ?>
</body>

</html>
