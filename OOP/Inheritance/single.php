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

        class Base {
            function __construct(){
                echo "I am a constructor of class A<br>";
            }

            public function fun1(){
                echo "I am a function of clas A<br>";
            }
        }

        class Derived extends Base {
            function __construct(){
                echo parent::__construct();
            }

            public function fun2(){
                echo "I am a function of class B<br>";
            }
        }

        $obj = new Derived();

        $obj->fun1();
        $obj->fun2();
    ?>
</body>

</html>