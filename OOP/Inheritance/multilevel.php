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
        class Product{
            function category(){
                echo "This is a Car!!<br>";
            }
        }

        class Company extends Product{
            function company_name(){
                echo "This car's company name is : Toyota<br>";
            }

        }

        class Model extends Company{
            function model_name(){
                echo "This car's model name is : Fortuner<br>";
            }
        }

        $obj = new Model();
        $obj->category();
        $obj->company_name();
        $obj->model_name();
    ?>
</body>

</html>