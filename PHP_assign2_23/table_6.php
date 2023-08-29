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
        ini_set('display_errors', 1);
        error_reporting(E_ALL);

        $student = array(
            array("first_name" => "Vaishali", "last_name" => "Mandloi", "dob" => "21/08/2002", "email" => "vm@gmail.com"),
            array("first_name" => "Abhi", "last_name" => "Choudhary", "dob" => "11/08/2002", "email" => "abhi@gmail.com"),
            array("first_name" => "Rupali", "last_name" => "Chouhan", "dob" => "01/08/2002", "email" => "rupa@gmail.com"),
            array("first_name" => "Harsh", "last_name" => "Raikwar", "dob" => "30/08/2002", "email" => "harsh@gmail.com")
        );

        $orders = array("first_name", "last_name", "dob", "email");
        echo "<h2>Student Details</h2>";
        echo "<table>";
        echo "<tr>
           <th>First Name</th>
           <th>Last Name</th>
           <th>Email</th>
           <th>Date of Birth</th>
        </tr>";

        foreach ($student as $value) {
            echo "<tr>";
            echo "<td>$value[first_name]</td>";
            echo "<td>$value[last_name]</td>";
            echo "<td>$value[email]</td>";
            echo "<td>$value[dob]</td>";
            echo "</tr>";
        }
    ?>
</body>

</html>