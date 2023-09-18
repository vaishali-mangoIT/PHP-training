<?php
    include '../connection.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "DELETE FROM Product_details WHERE id = $id";

        if ($conn->query($sql) === TRUE) {
            header('Location: displayProduct.php');
            exit;
        } else {
            echo "Error deleting record: " . $conn->error;
        }

        $conn->close();
    } else {
        echo "No ID available for deletion.";
    }
?>
 


