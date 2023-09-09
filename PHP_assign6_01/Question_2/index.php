<?php
    include '../connection.php';

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    
    $query = "SELECT id, name FROM Category_details";

    $result = $conn->query($query);
    
    if ($result->num_rows > 0) {
        $categories = $result->fetch_all(MYSQLI_ASSOC);
    } else {
        $categories = array();
    }

    $nameErr = "";
    $product_name = "";
    $product_identifier = "";
    $product_category = [];
    $id = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $product_name = isset($_POST['product_name']) ? $_POST['product_name'] : "";
        $product_identifier = isset($_POST['product_identifier']) ? $_POST['product_identifier'] : "";
        $id = isset($_POST['id']) ? $_POST['id'] : "";
        $product_category = isset($_POST['category']) ? $_POST['category'] : [];

        $category_string = implode(',', $product_category); //to convert an array to a single string

        //product name validation
        if ($product_name == "") {
            $nameErr = "This field is required";
        } else {
            $nameErr = "";
            if ($product_identifier == "") {
                $product_identifier = strtolower(str_replace(' ', '_', $product_name));
            }
        }

        if (empty($nameErr)) {
            if ($id!="") {
                $sql = "UPDATE Product_details
                SET name = '$product_name', identifier = '$product_identifier', categories = '$category_string' WHERE id = $id";

                if ($conn->query($sql) === TRUE) {
                    echo "Record updated successfully!";
                } else {
                    echo "Error(at updateing record) : " . $conn->error;
                }

            } else {
                $sql = "INSERT INTO Product_details(name, identifier, categories) VALUES ('$product_name', '$product_identifier', '$category_string')";

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
        $query = "SELECT * FROM Product_details WHERE id = $id";

        if ($result = $conn->query($query)) {
            if ($result->num_rows === 1) {
                $row = $result->fetch_assoc();
                $product_name = $row['name'];
                $product_identifier = $row['identifier'];
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
    <title>Product Form</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <h3>Product Details</h3>
        <div>
            <label class="form_field_title">Product Name :<label>
            <input type="text" name="product_name" id="product" value="<?php echo $product_name; ?>">
            <p class="error"><?php echo $nameErr ?></p>
        </div>
        <div>
            <label class="form_field_title">Identifier :<label>
            <input type="text" name="product_identifier" id="identifer" value="<?php echo $product_identifier; ?>">
        </div>
        <div>
            <label for = "categories">Categorise :<label>
            <select id="categories" name="category[]" multiple>
                <?php 
                    foreach ($categories as $category) { ?>
                    <option value="<?php echo $category['name']; ?>"><?php echo $category['name']; ?></option>
                <?php } 
                ?>
            </select>
        </div>
        <div>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
        </div>
        <div>
            <input type="submit" value="Add">
            <a href="displayProduct.php">Show Categories</a>
        </div>
    </form>
</body>

</html>