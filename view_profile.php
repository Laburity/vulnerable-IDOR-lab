<?php
session_start();

// Simulated user database
$users = [
    1 => ['name' => 'Alice', 'profile' => 'Admin Profile Info'],
    2 => ['name' => 'Bob', 'profile' => 'User Profile Info'],
    3 => ['name' => 'Charlie', 'profile' => 'User Profile Info']
];

// Get the `user_id` from the cookies
$cookie_user_id = isset($_COOKIE['user_id']) ? $_COOKIE['user_id'] : null;
$target_user_id = $_GET['user_id'];

// Check if cookie user ID matches the requested profile's user ID
if ($cookie_user_id == $target_user_id) {
    $user = $users[$target_user_id];
    echo "<h1>Profile of {$user['name']}</h1>";
    echo "<p>{$user['profile']}</p>";
} else {
    echo "<h1>Forbidden: You are not allowed to view this profile.</h1>";
}

echo "<a href='index.php'>Go Back</a>";
?>
