<?php

// Database connection details
$host = "localhost";
$username = "root";
$password = "";
$database = "campusvibe";

try {

    // Connect to MySQL database
    $conn = new PDO(
        "mysql:host=$host;dbname=$database;charset=utf8mb4",
        $username,
        $password
    );

    // Set PDO error mode
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

    die("Database connection failed. Please try again later.");

}

?>