<?php 
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "PHP_assign6_db";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error){
        die("Error(at database connection". $conn->connect_error);   
    } 
?>