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


// Get form information
$full_name = trim($_POST["full_name"] ?? "");

$registration_number = trim($_POST["registration_number"] ?? "");

$email = trim($_POST["email"] ?? "");

$phone = trim($_POST["phone"] ?? "");

$event_name = trim($_POST["event_name"] ?? "");


// Check required fields
if (
    empty($full_name) ||
    empty($registration_number) ||
    empty($email) ||
    empty($phone) ||
    empty($event_name)
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


// Save registration in database
try {

    $sql = "INSERT INTO registrations
            (full_name, registration_number, email, phone, event_name)
            VALUES (?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    $stmt->execute([
        $full_name,
        $registration_number,
        $email,
        $phone,
        $event_name
    ]);

    echo json_encode([
        "success" => true,
        "message" => "Registration successful! We look forward to seeing you."
    ]);

} catch (PDOException $e) {

    // Check for duplicate registration
    if ($e->getCode() == "23000") {

        echo json_encode([
            "success" => false,
            "message" => "You have already registered for this event."
        ]);

    } else {

        echo json_encode([
            "success" => false,
            "message" => "Registration failed. Please try again."
        ]);

    }

}

?>