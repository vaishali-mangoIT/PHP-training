<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>

<body>
    <?php
        class Calculator{
            private $first_number, $second_number;
            function __construct($first_number, $second_number){
                $this->first_number = $first_number;
                $this->second_number = $second_number;
            }
            function addition(){
                return $this->first_number + $this->second_number;
            }
            function subtraction(){
                return $this->first_number - $this->second_number;
            }
            function multiplication(){
                return $this->first_number * $this->second_number;
            }
            function division(){
                if($this->second_number == 0){
                    return 0;
                } else{
                    return $this->first_number / $this->second_number;
                }
            }
        }

        $input = new Calculator(15, 4);
        $add = $input->addition();
        $sub = $input->subtraction();
        $mul = $input->multiplication();
        $div = $input->division();
        
        echo "Arithmetic Operations :<br><br>";
        echo "Addition of given inputs: $add<br>";
        echo "Subtraction of given inputs: $sub<br>";
        echo "Multiplication of given inputs: $mul<br>";
        echo "Division of given inputs: $div<br>";
    ?>
</body>

</html>