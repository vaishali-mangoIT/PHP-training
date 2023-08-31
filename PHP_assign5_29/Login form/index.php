<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
        error_reporting(E_ALL);
        ini_set('display_errors', '1');        

        $emailErr = $passwordErr = $loginErr = "";
        $email = $password = "";

        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            //validate email
            if(empty($_GET["email"])) {
                $emailErr = "Email is required";
            } else {
                $email = $_GET["email"];
                $emailErr = "";
            }

            //validate password
            if (empty($_GET["password"])) {
                $passwordErr = "password is required";
            } else {
                $password = $_GET["password"];
                $passwordErr = "";
            }

            if (empty($emailErr) && empty($passwordErr)) {
                $servername = "localhost";
                $username = "root";
                $password = "root";
                $dbname = "Customer_details";
                
                $conn = new mysqli($servername, $username, $password, $dbname);
                
                if($conn->connect_error) {
                    die("Error(at connection) :". $conn->connect_error);
                }
    
                $sql = "SELECT * FROM Registration;";
                $result = $conn->query($sql);
      
                // Check if a matching user was found
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()){
                        if ($row["email"] == $_GET["email"] && $row["password"] == $_GET["password"]) {
                            header("Location: show.php?email=" . urlencode($row['email']) . "&password=" . urlencode($row['password']));
                            exit();
                        }
                        else if($email !== "" && $password !== "") {
                            $loginErr = "Login failed, No records found.";
                        }    
                    }
                }         
            } 
        }    
    ?>

    <h2>Login Form</h2>
    <form action="#" method="get">
        <div>
            <label for="email">Email :</label>
            <input type="email" placeholder="Enter your email" id="email" name="email">
            <p style="color: red; font-size: 12px;"><?php echo $emailErr; ?></p>
        </div>
        <div>
            <label for="password">Password :</label>
            <input type="password" placeholder="Enter your password" id="password" name="password">
            <p style="color: red; font-size: 12px;"><?php echo $passwordErr; ?></p>
        </div>
        <input type="submit" value="Login"></input>
    </form>

    <p class="login_err"><?php echo $loginErr; ?></p>
</body>

</html>


