<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array_merge_recursive</title>
</head>

<body>
    <?php
        ini_set('display_errors', 1);
        error_reporting(E_ALL);
        
        $first_user_detail = array("name"=>"Vaishali Mandloi", "age"=>21, "city"=>"Khargone");
        $second_user_detail = array("name"=>"Siddhi Mishra", "age"=>34, "email"=>"sid@gmail.com");
        echo "<pre>";
        print_r(array_merge_recursive($first_user_detail, $second_user_detail));
    ?>
</body>

</html>