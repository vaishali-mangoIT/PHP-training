<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        class Animal{
            function cmnProp(){
                echo "This animal having four legs, one tail and two eyes<br>";
            }
        }

        class Cat extends Animal{
            function sound(){
                echo "Car sound call : Meou....<br>";
            }
        }

        class Dog extends Animal{
            function sound(){
                echo "Dog sound call : Bark....<br>";
            }
        }

        class Lion extends Animal{
            function sound(){
                echo "Lion sound call : Roar....<br>";
            }
        }

        $dog = new Dog();
        $dog->sound();
        $dog->cmnProp();
    ?>
</body>

</html>