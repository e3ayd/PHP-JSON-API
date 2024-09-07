<?php
// A simple array of user data
$users = [
    1 => ["id" => 1, "name" => "John Doe", "email" => "john@example.com"],
    2 => ["id" => 2, "name" => "Jane Smith", "email" => "jane@example.com"],
    3 => ["id" => 3, "name" => "Michael Johnson", "email" => "michael@example.com"],
];

// Get the user ID from the URL
$userId = isset($_GET['id']) ? (int)$_GET['id'] : 0;

header('Content-Type: application/json');

// Check if a valid user ID was provided
if ($userId > 0 && isset($users[$userId])) {
    echo json_encode([
        "status" => "success",
        "data" => $users[$userId]
    ]);
} else {
    // Return an error message if the user is not found
    echo json_encode([
        "status" => "error",
        "message" => "User not found"
    ]);
}
?>
