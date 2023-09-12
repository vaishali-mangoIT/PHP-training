<?php
    include '../connection.php';

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $nameErr = "";
    $category_name = "";
    $category_identifier = "";
    $id = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $category_name = isset($_POST['category_name']) ? $_POST['category_name'] : "";
        $category_identifier = isset($_POST['category_identifier']) ? $_POST['category_identifier'] : "";
        $id = isset($_POST['id']) ? $_POST['id'] : "";

        //category name validation
        if ($category_name == "") {
            $nameErr = "This field is required";
        } else {
            $nameErr = "";
            if ($category_identifier == "") {
                $category_identifier = strtolower(str_replace(' ', '_', $category_name));
            }
        }

        if (empty($nameErr)) {
            if ($id!="") {
                $sql = "UPDATE Category_details
                SET name = '$category_name', identifier = '$category_identifier' WHERE id = $id";

                if ($conn->query($sql) === TRUE) {
                    echo "Record updated successfully!";
                } else {
                    echo "Error(at updateing record) : " . $conn->error;
                }

            } else {
                $sql = "INSERT INTO Category_details(name, identifier) VALUE ('$category_name', '$category_identifier')";

                if ($conn->query($sql) === TRUE) {
                    echo "Record inserted successfully!";
                } else {
                    echo "Error(at inserting record) : " . $conn->error;
                }
            }
            $conn->close();
        }
    }

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM Category_details WHERE id = $id";

        if ($result = $conn->query($query)) {
            if ($result->num_rows === 1) {
                $row = $result->fetch_assoc();
                $category_name = $row['name'];
                $category_identifier = $row['identifier'];
            } else {
                echo "Record not found.";
            }
            $result->free();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Form</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <h3>Category Details</h3>
        <div>
            <label class="form_field_title">Category Name :<label>
            <input type="text" name="category_name" id="category" value="<?php echo $category_name; ?>">
            <p class="error"><?php echo $nameErr ?></p>
        </div>
        <div>
            <label class="form_field_title">Identifier :<label>
            <input type="text" name="category_identifier" id="identifer" value="<?php echo $category_identifier; ?>">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
        </div>
        <div>
            <input type="submit" value="Add">
            <a href="displayCategories.php">Show Categories</a>
        </div>
    </form>
</body>

</html>