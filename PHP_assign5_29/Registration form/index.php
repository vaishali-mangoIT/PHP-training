<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
        $dob = $_GET["dob"];
        $gender = isset($_GET["gender"]) ? $_GET["gender"] : "";

        $firstNameErr =  $lastNameErr = $emailErr = $passwordErr = "";
        $firstName = $lastName = $email = $password = "";

        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            //validate first name
            if (empty($_GET["first_name"])) {
                $firstNameErr = "First name is required";
            } elseif (!preg_match('/^[A-Z][a-zA-Z]*$/', $_GET["first_name"])) {
                $firstNameErr = "Start with uppercase and only having alphabates";
            } else {
                $firstName = $_GET["first_name"];
                $firstNameErr = ""; 
            }
        
            //validate last name
            if (empty($_GET["last_name"])) {
                $lastNameErr = "Last name is required";
            } elseif (!preg_match('/^[A-Z][a-zA-Z]*$/', $_GET["last_name"])) {
                $lastNameErr = "Start with uppercase and only having alphabates";
            } else {
                $lastName = $_GET["last_name"];
                $lastNameErr = "";
            }

            //validate email
            if(empty($_GET["email"])) {
                $emailErr = "Email is required";
            } elseif (!preg_match('/^[a-zA-Z0-9_+-.]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$/', $_GET["email"])) {
                $emailErr = "Email format is not valid";
            } else {
                $email = $_GET["email"];
                $emailErr = "";
            }

            //validate password
            if (empty($_GET["password"])) {
                $passwordErr = "password is required";
            } elseif (!preg_match('/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@#$%^&*()_+!])[A-Za-z\d@#$%^&*()_+!]{8,}$/', $_GET["password"])) {
                $passwordErr = "password must having at least 8 char inlcuding 1 uppercse, 1 lowercase and 1 special char";
            } else {
                $password = $_GET["last_name"];
                $passwordErr = "";
            }
        }

        if (empty($firstNameErr) && empty($lastNameErr) && empty($emailErr) && empty($passwordErr)) {
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

            $sql = "INSERT INTO Registration(first_name, last_name, email, date_of_birth, gender, password) VALUES ('$firstName', '$lastName', '$email', '$dob', '$gender', '$password') ";

            if($conn->query($sql) === TRUE) {
                echo "New record added<br>";
            } else {
                echo "Error(when inserting record) : ". $conn->error;
            }

            $conn->close();
        } 
    ?>

    <h2>Registration Form</h2>
    <form action="#" method="get">
        <div>
            <label for="fname">First Name :</label>
            <input type="text" placeholder="Enter first name" id="fname" name="first_name">
            <p style="color: red; font-size: 12px;"><?php echo $firstNameErr; ?></p>
        </div>
        <div>
            <label for="lname">Last Name :</label>
            <input type="text" placeholder="Enter last name" id="lname" name="last_name">
            <p style="color: red; font-size: 12px;"><?php echo $lastNameErr; ?></p>
        </div>
        <div>
            <label for="email">Email :</label>
            <input type="email" placeholder="Enter your email" id="email" name="email">
            <p style="color: red; font-size: 12px;"><?php echo $emailErr; ?></p>
        </div>
        <div>
            <label for="dob">Date of Birth :</label>
            <input type="date" id="dob" name="dob">
        </div>
        <div>
            <label for="password">Password :</label>
            <input type="password" placeholder="Enter your password" id="password" name="password">
            <p style="color: red; font-size: 12px;"><?php echo $passwordErr; ?></p>
        </div>
        <div>
            <label>Gender :</label>
            <div class="gender">
                <input type="radio" name="gender" id="male" value="Male">
                <label for="male">Male</label>
                <input type="radio" name="gender" id="female" value="Female">
                <label for="female">Female</label>
                <input type="radio" name="gender" id="other" value="Other">
                <label for="other">Other</label>
            </div>
        </div>
        <input type="submit"></input>
        <a href="showDetails.php">Click to Show User Details</a>
    </form>

    
