<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity Bill</title>
</head>

<body>
    <?php
        class ElectricityBill {
            private $consuption, $charge;
            function set_consuption($consuption){
                $this->consuption = $consuption;
            }
            function get_bill(){
                if($this->consuption <= 100){
                    $charge = $this->consuption*6;
                }
                else if($this->consuption>100 && $this->consuption<=250){
                    $charge = $this->consuption*10;
                }
                else{
                    $basic_unit_charge = $this->consuption*15;
                    $addition_charge = ($basic_unit_charge * 5)/100;
                    $charge = $basic_unit_charge + $addition_charge;
                }
                return $charge;
            }
        }
        $input = new ElectricityBill();
        $input ->set_consuption(300);
        echo "Electricity Bill is: ".$input->get_bill();
    ?>
</body>

</html>
