<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Replace Word</title>
</head>

<body>
    <?php
        class ReplaceWord {
            private $message;   
            function __construct($msg){
                $this->message = $msg;
            }
            function replace($find, $replace){
                return str_replace($find, $replace, $this->message);
            }
        }
        $find = array("position", "X");
        $replace = array("Software Engineer", "7");
        $message = "I have been working as a position for X years.";
        echo "Current String : ".$message."<br><br>";
        $input = new ReplaceWord($message);
        echo  "Updated String : ".$input->replace($find, $replace); 
    ?>
</body>

</html>