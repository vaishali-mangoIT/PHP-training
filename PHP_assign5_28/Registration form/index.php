<?php
    include '../connection.php';

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $firstName = $lastName = $email = $dob = $password = $gender = "";
    $firstNameErr = $lastNameErr = $emailErr = $dobErr = $passwordErr = $genderErr = "";
    $result = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstName = isset($_POST["first_name"]) ? $_POST["first_name"] : "";
        $lastName = isset($_POST["last_name"]) ? $_POST["last_name"] : "";
        $email = isset($_POST["email"]) ? $_POST["email"] : "";
        $dob = isset($_POST["dob"]) ? $_POST["dob"] : "";
        $password = isset($_POST["password"]) ? $_POST["password"] : "";
        $gender = isset($_POST["gender"]) ? $_POST["gender"] : "";

        //validate first name
        if ($firstName == "") {
            $firstNameErr = "This field is required";
        } elseif (!preg_match('/^[A-Z][a-zA-Z ]*$/', $firstName)) {
            $firstNameErr = "Start with uppercase and only having alphabates";
        } else {
            $firstNameErr = ""; 
        }
        
        //validate last name
        if ($lastName == "") {
            $lastNameErr = "This field is required";
        } elseif (!preg_match('/^[A-Z][a-zA-Z ]*$/', $lastName)) {
            $lastNameErr = "Start with uppercase and only having alphabates";
        } else {
            $lastNameErr = "";
        }

        //validate email
        if($email == "") {
            $emailErr = "This field is required";
        } elseif (!preg_match('/^[a-zA-Z0-9_+-.]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$/', $email)) {
            $emailErr = "Email format is not valid";
        } else {
            $checkEmailQuery = "SELECT * FROM users WHERE email = '$email'";
            $checkEmailResult = $conn->query($checkEmailQuery);
            
            if ($checkEmailResult->num_rows > 0) {
                $emailErr = "This email is already in use, please enter another email.";
            } else {
                $emailErr = "";
            }
        }

        //validate dob
        if($dob == "") {
            $dobErr = "This field is required";
        } else {
            $dobErr = "";
        }

        //validate password
        if ($password == "") {
            $passwordErr = "This field is required";
        } elseif (!preg_match('/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@#$%^&*()_+!])[A-Za-z\d@#$%^&*()_+!]{8,}$/', $password)) {
            $passwordErr = "password must having at least 8 char inlcuding 1 uppercse, 1 lowercase and 1 special char";
        } else {
            $passwordErr = "";
        }

        //validate gender
        if($gender == "") {
            $genderErr = "This field is required";
        } else {
            $genderErr = "";
        }

        if (empty($firstNameErr) && empty($lastNameErr) && empty($dobErr) && empty($emailErr) && empty($passwordErr) && empty($genderErr)) {
            $sql = "INSERT INTO users(first_name, last_name, email, date_of_birth, gender, password) VALUES ('$firstName', '$lastName', '$email', '$dob', '$gender', '$password') ";
    
            if ($conn->query($sql) === TRUE) {
                $result="Record inserted Successfully!!!";
            } else {
                echo "Error(at inserting record) : " . $conn->error;
            }              
    
            $conn->close();
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <h2>Registration Form</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div>
            <label for="fname" class="form_field_title">First Name :</label>
            <input type="text" placeholder="Enter first name" id="fname" name="first_name" value="<?php if(($firstNameErr !== "") || ($lastNameErr !== "") || ($dobErr !== "") || ($emailErr !== "") || ($passwordErr !== "") || ($genderErr !== "")) echo $firstName; ?>">
            <p class="error"><?php echo $firstNameErr; ?></p>
        </div>
        <div>
            <label for="lname" class="form_field_title">Last Name :</label>
            <input type="text" placeholder="Enter last name" id="lname" name="last_name" value="<?php if(($firstNameErr !== "") || ($lastNameErr !== "") || ($dobErr !== "") || ($emailErr !== "") || ($passwordErr !== "") || ($genderErr !== "")) echo $lastName; ?>">
            <p class="error"><?php echo $lastNameErr; ?></p>
        </div>
        <div>
            <label for="email" class="form_field_title">Email :</label>
            <input type="text" placeholder="Enter your email" id="email" name="email" value="<?php if(($firstNameErr !== "") || ($lastNameErr !== "") || ($dobErr !== "") || ($emailErr !== "") || ($passwordErr !== "") || ($genderErr !== "")) echo $email ?>">
            <p class="error"><?php echo $emailErr; ?></p>
        </div>
        <div>
            <label for="dob" class="form_field_title">Date of Birth :</label>
            <input type="date" id="dob" name="dob" value="<?php if(($firstNameErr !== "") || ($lastNameErr !== "") || ($dobErr !== "") || ($emailErr !== "") || ($passwordErr !== "") || ($genderErr !== "")) echo $dob ?>">
            <p class="error"><?php echo $dobErr; ?></p>
        </div>
        <div>
            <label for="password" class="form_field_title">Password :</label>
            <input type="password" placeholder="Enter your password" id="password" name="password" value="<?php if(($firstNameErr !== "") || ($lastNameErr !== "") || ($dobErr !== "") || ($emailErr !== "") || ($passwordErr !== "") || ($genderErr !== "")) echo $password ?>">
            <p class="error"><?php echo $passwordErr; ?></p>
        </div>
        <div>
            <label class="form_field_title">Gender :</label>
            <div class="gender">
                <input type="radio" name="gender" id="male" value="Male"  <?php if(($firstNameErr !== "") || ($lastNameErr !== "") || ($dobErr !== "") || ($emailErr !== "") || ($passwordErr !== "") || ($genderErr !== "")){if ($gender === 'Male') echo 'checked';}  ?>>
                <label for="male">Male</label>
                <input type="radio" name="gender" id="female" value="Female" <?php if(($firstNameErr !== "") || ($lastNameErr !== "") || ($dobErr !== "") || ($emailErr !== "") || ($passwordErr !== "") || ($genderErr !== "")){if ($gender === 'Female') echo 'checked';}  ?>>
                <label for="female">Female</label>
                <input type="radio" name="gender" id="other" value="Other" <?php if(($firstNameErr !== "") || ($lastNameErr !== "") || ($dobErr !== "") || ($emailErr !== "") || ($passwordErr !== "") || ($genderErr !== "")){if ($gender === 'Other') echo 'checked';}  ?>>
                <label for="other">Other</label>
            </div>
            <p class="error"><?php echo $genderErr; ?></p>
        </div>
        <input type="submit" value="Submit"></input>
        <a href="showDetails.php">Click to Show User Details</a>
    </form>
    <p class="result"><?php echo $result; ?></p>
</body>

</html>

