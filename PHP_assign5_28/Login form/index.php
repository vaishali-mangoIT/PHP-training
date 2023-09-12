<?php
    include '../connection.php';

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $username = $password = "";
    $usernameErr = $passwordErr = "";
    $loginMessage = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = isset($_POST["email"]) ? $_POST["email"] : "";
        $password = isset($_POST["password"]) ? $_POST["password"] : "";

        // Validate email (username)
        if (empty($username)) {
            $usernameErr = "This field is required";
        }

        // Validate password
        if (empty($password)) {
            $passwordErr = "This field is required";
        }

        if (empty($usernameErr) && empty($passwordErr)) {
            $stmt = $conn->prepare("SELECT * FROM Registration WHERE email = ? AND password = ?");
            $stmt->bind_param("ss", $username, $password);
            $stmt->execute();
            $result = $stmt->get_result();
    
            if ($result->num_rows > 0) {
                header('Location: profile.php?email='.$username);
                exit;
            } else {
                $loginMessage = "Invalid email and passwored entered";
            }

            $stmt->close();
            $conn->close();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <h2>Login Form</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div>
            <label for="email" class="form_field_title">Username :</label>
            <input type="text" placeholder="Enter username" id="email" name="email" autocomplete="off">
            <p class="error"><?php echo $usernameErr; ?></p>
        </div>
        <div>
            <label for="password" class="form_field_title">Password :</label>
            <input type="password" placeholder="Enter password" id="password" name="password">
            <p class="error"><?php echo $passwordErr; ?></p>
        </div>
        <input type="submit" value="Login"></input>
    </form>
    <p class="login_msg"><?php echo $loginMessage; ?></p>
</body>

</html>
