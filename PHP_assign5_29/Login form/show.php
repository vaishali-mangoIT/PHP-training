<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
        error_reporting(E_ALL);
        ini_set('display_errors', '1');   
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "Customer_details";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Error(at connection) :" . $conn->connect_error);
        }

        if (isset($_GET['email']) && isset($_GET['password'])) {
            $email = urldecode($_GET['email']);
            $password = urldecode($_GET['password']);

            $query = "SELECT * FROM `Registration` WHERE `email` = '$email' AND `password` = '$password';";
            echo "<h2>User Details</h2>";
            echo "<table>";
            echo "<tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Date of Birth</th>
                <th>Gender</th>
                <th>Password</th>
            </tr>";

            if ($result = $conn->query($query)) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" .$row["first_name"]. "</td>";
                    echo "<td>" .$row["last_name"]. "</td>";
                    echo "<td>" .$row["email"]. "</td>";
                    echo "<td>" .$row["date_of_birth"]. "</td>";
                    echo "<td>" .$row["gender"]. "</td>";
                    echo "<td>" .$row["password"]. "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                $result->free();
            }
            $conn->close();

        } else {
            echo "parameter missing.";
        }  
    ?>
</body>

</html>
