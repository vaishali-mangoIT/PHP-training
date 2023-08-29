<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
        $username_error = $password_error = "";
        $username = $password = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["user_name"])) {
                $username_error = "<span class='error'>This field is required</span>";
            } else {
                $username = trim_input($_POST["user_name"]);
            }
  
            if (empty($_POST["password"])) {
                $password_error = "<span class='error'>This field is required</span>";
            } else {
                $password = trim_input($_POST["password"]);
            }
        }

        function trim_input($data) {
            $data = trim($data);
            return $data;
        }
    ?>

    <h2>Login Form</h2>
    <form action="" method="POST">
        <p class="title">Login</p>
        <div>
            <label for="username">Username :</label>
            <input type="text" placeholder="Enter username" id="username" name="user_name"><br>
            <span><?php if(isset($username_error)) echo $username_error;?></span>
        </div>
        <div>
            <label for="password">Password :</label>
            <input type="password" placeholder="Enter password" id="password" name="password"><br>
            <span><?php if(isset($password_error)) echo $password_error;?></span>
        </div>
        <input type="submit" value="Login">
    </form>
</body>

</html>
