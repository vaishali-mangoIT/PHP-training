<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Table</title>
    <style>
        input[type=text]{
            padding: 9px;
            margin: 6px;
            border-radius: 6px;
        }
        input[type=submit]{
            padding: 8px;
            margin: 6px;
            color: white;
            background-color: green;
            border: none;
            border-radius: 6px;
        }
        label{
            color: brown;
            margin:6px;
        }
    </style>
</head>

<body>
    <form action="form.php" method="get">
        <div>
            <label for="number">Enter Number</label><br>
            <input type="text" id="number" name="number" value="0">
        </div>
        <input type="submit" value="Submit">
    </form>        
</body>

</html>