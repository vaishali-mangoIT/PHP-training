<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 
        ini_set('display_errors', 1);
        error_reporting(E_ALL);

        abstract class Car{
            protected $name;
            function __construct($name){
              $this->name = $name;
            }
            abstract protected function color();
        }

        class Audi extends Car{
            public function color(){
                echo "$this->name color is white<br>";
            }
        }

        class Fortuner extends Car{
            public function color(){
                echo "$this->name color is blue<br>";
            }   
        }

        $audi = new Audi("Audi");
        $fortuner = new Fortuner("Fortuner");
        $audi->color();
        $fortuner->color();
    ?>
</body>

</html>