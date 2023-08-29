<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Details</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
        $username = $_POST["user_name"];
        $firstName = $_POST["first_name"];
        $lastName = $_POST["last_name"];
        $gender = isset($_POST["gender"]) ? $_POST["gender"] : "";
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirmPassword = $_POST["confirm_password"];

        echo "<table>";
        echo "<tr>";
            echo "<th>Username</th>";
            echo "<th>First Name</th>";
            echo "<th>Last Name</th>";
            echo "<th>Gender</th>";
            echo "<th>Email</th>";
            echo "<th>Password</th>";
            echo "<th>Confirm Password</th>";
        echo "</tr>";

        if($username !== "" || $firstName !== "" || $lastName !== "" || $gender !== "" || $email !== "" || $password !== "" || $confirmPassword !== ""){
            echo "<tr>";
            echo "<td>$username</td>";
            echo "<td>$firstName</td>";
            echo "<td>$lastName</td>";
            echo "<td>$gender</td>";
            echo "<td>$email</td>";
            echo "<td>$password</td>";
            echo "<td>$confirmPassword</td>";
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>

</html>

    