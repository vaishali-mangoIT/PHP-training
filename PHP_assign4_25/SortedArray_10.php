<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word Position</title>
</head>

<body>
    <?php
        class Sorting {
            function sortArray($arr, $order){
                if($order === "asc"){
                    sort($arr);
                    echo "Array in ascending order:<br>";
                    echo "<pre>";
                    print_r($arr);
                } else if($order === "des"){
                    rsort($arr);
                    echo "<br>Array in descending order:<br>";
                    echo "<pre>";
                    print_r($arr);
                } else {
                    echo "Please pass a right parameter for sorting order!!!";
                }
            }
        }
        $ages = array(11, -2, 4, 35, 0, 8, -9);
        $input = new Sorting();
        $input->sortArray($ages, "des");
    ?>
</body>

</html>
