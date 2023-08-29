<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word Position</title>
</head>

<body>
    <?php
        class ReverseString {
            private $message;   
            function __construct($msg){
                $this->message = $msg;
            }
            function reverse(){
                return strrev($this->message);
            }
        }
        $message = "elgoog morf margorp siht deipoc ton evah eW";
        $input = new ReverseString($message);
        echo "Current String : ".$message."<br><br>";
        echo  "Reverse String : ".$input->reverse();   
    ?>
</body>

</html>