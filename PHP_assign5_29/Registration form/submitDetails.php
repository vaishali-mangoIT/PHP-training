<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Details</title>
</head>

<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "Customer_details";
        
        //create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        //check connection
        if($conn->connect_error) {
            die("Error(at connection) :". $conn->connect_error);
        } else {
            echo "succefully connected with database<br>";
        }

        $lastName = $_GET["last_name"];
        $email = $_GET["email"];
        $dob = $_GET["dob"];
        $gender = isset($_GET["gender"]) ? $_GET["gender"] : "";
        $password = $_GET["password"];

        // if (empty($dob) || !preg_match('/^\d{4}-\d{2}-\d{2}$/', $dob)) {
        //     echo "Error: Invalid date of birth format";
        // } else {
        //     $sql = "INSERT INTO Registration(first_name, last_name, email, date_of_birth, gender, password) VALUES ('$firstName', '$lastName', '$email', '$dob', '$gender', '$password') ";

        //     if ($conn->query($sql) === TRUE) {
        //         echo "New record added<br>";
        //     } else {
        //         echo "Error(when inserting record) : " . $conn->error;
        //     }
        // }

        $sql = "INSERT INTO Registration(first_name, last_name, email, date_of_birth, gender, password) VALUES ('$firstName', '$lastName', '$email', '$dob', '$gender', '$password') ";

        if($conn->query($sql) === TRUE) {
            echo "New record added<br>";
        } else {
            echo "Error(when inserting record) : ". $conn->error;
        }

        $conn->close();
    ?>
</body>

</html>