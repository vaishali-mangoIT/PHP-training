<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number</title>
</head>

<body>
    <?php
        ini_set('display_errors', 1);
        error_reporting(E_ALL);

        $number = 17;
        $result = isPrime($number);

        if ($result == true){
            echo "This is a Prime Number!!";
        } else{
            echo "This is not a Prime Number!!";
        }

        function isPrime($number): bool
        {
            if ($number <= 1){
                return false;
            } 
            else{
                for ($i = 2; $i <= $number/2; $i++) {
                    if ($number % $i == 0){
                        return false;
                    }
                }
                return true;
            }
        }
  ?>
</body>

</html>