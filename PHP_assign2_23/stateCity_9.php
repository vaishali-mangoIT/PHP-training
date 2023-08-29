<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array_merge_recursive</title>
    <style>
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
        table {
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <?php
        $state = array("mp"=>"Madhya Pradesh", "raj"=>"Rajasthan", "maha"=>"Maharashtra", "guj"=>"Gujarat"); 
        $cities = array(
            "mp"=> array("Indore", "Dewas", "Ujjain"),
            "maha"=> array("Mumbai", "Pune", "Nashik", "Nagpur"),
            "raj"=> array("Jaipur", "Udaipur"),
            "guj"=> array("Ahmedabad", "Surat", "Vadodara")
        );

        $merge_array = array_merge_recursive($state, $cities);

        echo "<table>";
        echo "<tr>
            <th>State</th>
            <th>Cities</th>
        </tr>";     
      
        foreach($merge_array as $index => $stateCities){
            echo "<tr>";
            echo "<td>$state[$index]</td>";
          
            echo "<td>";
            $city = array_slice($stateCities,1);
            foreach($city as $citiesName) {
                echo "$citiesName<br>";
            }
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>

</html>
