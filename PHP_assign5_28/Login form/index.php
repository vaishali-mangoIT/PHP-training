<?php
    include '../connection.php';

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    session_start();

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
            $loginQuery = "SELECT * FROM users WHERE email = '$username' AND password = '$password'";
            $loginResult = $conn->query($loginQuery);
    
            if ($loginResult -> num_rows > 0) {
                $_SESSION['email'] = $username;
                header('Location: profile.php');
                exit;
            } else {
                $loginMessage = "Invalid email and passwored entered";
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
    <title>Login Form</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <h2>Login Form</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div>
            <label for="email" class="form_field_title">Username :</label>
            <input type="text" placeholder="Enter username" id="email" name="email" autocomplete="off" value="<?php if($usernameErr !=="" || $passwordErr !=="") echo $username; ?>">
            <p class="error"><?php echo $usernameErr; ?></p>
        </div>
        <div>
            <label for="password" class="form_field_title">Password :</label>
            <input type="password" placeholder="Enter password" id="password" name="password" value="<?php if($usernameErr !=="" || $passwordErr !=="") echo $password; ?>">
            <p class="error"><?php echo $passwordErr; ?></p>
        </div>
        <input type="submit" value="Login"></input>
    </form>
    <p class="login_msg"><?php echo $loginMessage; ?></p>
</body>

</html>
