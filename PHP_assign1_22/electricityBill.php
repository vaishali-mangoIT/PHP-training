<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity Bill</title>
</head>

<body> 
    <?php
        $consuption = 300; 

        if($consuption <= 100){
            $charge = $consuption*6;
        }
        else if($consuption>100 && $consuption<=250){
            $charge = $consuption*10;
        }
        else{
            $basic_unit_charge = $consuption*15;
            $addition_charge = ($basic_unit_charge * 5)/100;
            $charge = $basic_unit_charge + $addition_charge;
        }
        echo "Electricity Bill is : $charge/-";
   ?>
</body>

</html>