<?php

header("Content-Type: application/json");

require_once "db.php";


// Accept POST requests only
if ($_SERVER["REQUEST_METHOD"] !== "POST") {

    echo json_encode([
        "success" => false,
        "message" => "Invalid request."
    ]);

    exit;

}


// Get contact form information
$name = trim($_POST["name"] ?? "");

$email = trim($_POST["email"] ?? "");

$subject = trim($_POST["subject"] ?? "");

$message = trim($_POST["message"] ?? "");


// Check required fields
if (
    empty($name) ||
    empty($email) ||
    empty($subject) ||
    empty($message)
) {

    echo json_encode([
        "success" => false,
        "message" => "Please fill in all fields."
    ]);

    exit;

}


// Validate email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

    echo json_encode([
        "success" => false,
        "message" => "Please enter a valid email address."
    ]);

    exit;

}


// Save message in database
try {

    $sql = "INSERT INTO messages (name, email, subject, message)
            VALUES (?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    $stmt->execute([
        $name,
        $email,
        $subject,
        $message
    ]);

    echo json_encode([
        "success" => true,
        "message" => "Thank you! Your message has been sent successfully."
    ]);

} catch (PDOException $e) {

    echo json_encode([
        "success" => false,
        "message" => "Unable to send your message. Please try again."
    ]);

}

?>