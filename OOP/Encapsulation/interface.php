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
        interface Interface1 {
            public function method1();
        }

        interface Interface2 {
            public function method2();
        }

        class MyClass implements Interface1, Interface2 {
            public function method1() {
                echo "Method1 from Interface1<br>";
            }

            public function method2() {
                echo "Method2 from Interface2<br>";
            }
        }

        $obj = new MyClass();
        $obj->method1();
        $obj->method2();
    ?>
</body>

</html>