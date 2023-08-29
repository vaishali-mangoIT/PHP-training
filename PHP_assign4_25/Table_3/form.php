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
                $this->number = $number;
                for($i=1; $i<=10; $i++){
                    echo "$this->number * $i = ".($this->number * $i)."<br>";
                }
            }
        }
        $input = new PrintTable();
        echo "Table of number ".$_GET["number"]."<br><br>";
        $input->get_table($_GET["number"]);
    ?>
</body>

</html>