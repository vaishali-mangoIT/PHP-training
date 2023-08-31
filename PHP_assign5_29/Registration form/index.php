<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Registration Form</h2>
    <form action="submitDetails.php" method="get">
        <div>
            <label for="fname">First Name :</label>
            <input type="text" placeholder="Enter first name" id="fname" name="first_name">
            <p id="fname_err"></p>
        </div>
        <div>
            <label for="lname">Last Name :</label>
            <input type="text" placeholder="Enter last name" id="lname" name="last_name">
        </div>
        <div>
            <label for="email">Email :</label>
            <input type="email" placeholder="Enter your email" id="email" name="email">
        </div>
        <div>
            <label for="dob">Date of Birth :</label>
            <input type="date" id="dob" name="dob">
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
        <div>
            <label for="password">Password :</label>
            <input type="password" placeholder="Enter your password" id="password" name="password">
        </div>
        <input type="submit"></input>
        <a href="showDetails.php">Click to Show User Details</a>
    </form>
</body>

</html>

