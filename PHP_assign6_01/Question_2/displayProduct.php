<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <?php
        include '../connection.php';

        error_reporting(E_ALL);
        ini_set('display_errors', 1);

        $query = "SELECT * FROM Product_details";

        echo "<h3 class='display_heading'>Product Details : </h3>";

        echo "<table>";
        echo "<tr>
            <th>Product_name</th>
            <th>Product_identifier</th>
            <th>Categories</th>
            <th>Action</th>
        <tr>";

        if ($result = $conn->query($query)) {
            // echo "<pre>";
            // print_r($result);
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["identifier"] . "</td>";
                echo "<td>" . $row["categories"] . "</td>";
                echo "<td><a href='index.php?id=" . $row["id"]."'>Edit</a> <a href='deleteProduct.php?id=" . $row["id"] . "'>Delete</a></td>";
                echo "</tr>";
            }
            echo "</table>";
            $result->free();
        }
        $conn->close();
    ?>
</body>

</html>

