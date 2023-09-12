<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "Customer_details";
    
    //create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    //check connection
    if($conn->connect_error) {
        die("Error(at db connection) :". $conn->connect_error);
    } 
?>

