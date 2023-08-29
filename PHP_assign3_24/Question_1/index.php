<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <h2>Feedback Form</h2>
    <form action="" method="get" id="form">
        <div>
            <label for="fname">First Name :</label>
            <input type="text" placeholder="Enter first name" id="fname" name="first_name">
        </div>
        <div>
            <label for="lname">Last Name :</label>
            <input type="text" placeholder="Enter last name" id="lname" name="last_name">
        </div>
        <div>
            <label>Gender :</label><br>
            <div class="gender">
                <input type="radio" name="gender" id="male" value="Male">
                <label for="male">Male</label>
                <input type="radio" name="gender" id="female" value="Female">
                <label for="female">Female</label>
                <input type="radio" name="gender" id="other" value="Other">
                <label for="other">Other</label>
            </div>
        </div>
        <div>
            <label for="email">Email :</label><br>
            <input type="email" placeholder="Enter your email" id="email" name="email">
        </div>
        <div>
            <label>Comment :</label><br>
            <textarea cols="29" rows="5" name="comment" placeholder="Write comment here......"></textarea>
        </div>
        <input type="submit" id="sub">
    </form>
    
    <div class="showDetails">
        <?php
            $firstName = trim($_GET["first_name"]);
            $lastName = trim($_GET["last_name"]);
            $email = trim($_GET["email"]);
            $comment = trim($_GET["comment"]);

            echo "Feedback :<br>";
            echo "<label><br>First Name :</label>".$firstName;
            echo "<label><br>Last Name :</label>".$lastName;
            echo "<label><br>Email :</label>".$email;
            if (isset($_GET["gender"])) {
                echo "<label><br>Gender :</label>" .$_GET["gender"];
            } else {
                echo "<label><br>Gender :</label>";
            }
                echo "<label><br>Comment :</label>".$comment;
        ?>
   </div>
   <script src="script.js"></script>
</body>

</html>


