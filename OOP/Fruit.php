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
        class Fruit {
            private $name, $color;  //this are properties
            const PI = 3.14159265359;


            function __construct($name, $color){   //this are methods
                $this->name = $name;
                $this->color = $color;
            }
            function get_name(){ //method
                return $this->name;
            }
            function get_color(){ //method
                return $this->color;
            }

            function __destruct(){
                echo "<br>Destructor is called<br>";
            }
        }

        $mango = new Fruit("Mango", "Yellow");
        $apple = new Fruit("Apple", "Red");
        $graps = new Fruit("Graps", "Green");

        echo $mango->get_name()." color is :". $mango->get_color()."<br>";
        echo $apple->get_name()." color is :". $apple->get_color()."<br>";

        echo "Value of pi is : ". Fruit::PI;

        // echo var_dump($mango instanceof Fruit)."<br>";
        // echo var_dump($apple instanceof Fruit);
    ?>
</body>

</html>