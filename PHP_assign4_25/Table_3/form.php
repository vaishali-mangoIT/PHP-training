<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Table</title>
</head>

<body>
    <?php
        class PrintTable {
            private $number;
            function get_table($number){
                    echo "Table of number ".$_GET["number"]."<br><br>";
                    $this->number = $number;
                    for($i=1; $i<=10; $i++){
                        echo "$this->number * $i = ".($this->number * $i)."<br>";
                    }
            }
        }
        $input = new PrintTable(); 
        if(is_numeric($_GET["number"])) {
            $input->get_table($_GET["number"]);
        } else {
            echo "This is not a valid input";
        }
    ?>
</body>

</html>