<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word Position</title>
</head>

<body>
    <?php
        class WordPosition {
            private $message;   
            function __construct($msg){
                $this->message = $msg;
            }
            function findPos(){
                return strpos($this->message, "experience");
            }
        }
        $input = new WordPosition("It was a very enriching experience at the University as not only we were actively involved in practical projects");
        echo  "Position of word experience in given string is : ".$input->findPos();   
    ?>
</body>

</html>