<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <link rel="stylesheet" href="styel.css">
</head>

<body>
    <?php
        $Employee = array(
            array("username"=>"Vaishali Mandloi", "email"=>"vm@gmail.com", "contact"=>array("9876354321", "9876354321", "9876354321")),
            array("username"=>"Harsh Raikwar", "email"=>"harsh@gmail.com", "contact"=>array("9876354321")),
            array("username"=>"Abhi Choudhary", "email"=>"abhi@gmail.com", "contact"=>array("9876354321", "9876354321")),
        );

        echo "<h2>Employee Details</h2>";
        echo "<table>";
        echo "<tr>
            <th>Username</th>
            <th>Email</th>
            <th>Contact</th>
        </tr>";
        foreach($Employee as $emp){
            echo "<tr>";
            echo "<td>$emp[username]</td>";
            echo "<td>$emp[email]</td>";
            echo "<td>";
            foreach($emp[contact] as $contactNo){
               echo "$contactNo<br>";
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>

</html>