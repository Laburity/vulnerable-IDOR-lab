<?php
session_start();

// Simulating logged-in user (Bob with user_id=2)
$_SESSION['user_id'] = 2;

// Set a cookie for the logged-in user (Bob)
setcookie('user_id', $_SESSION['user_id'], time() + (86400 * 30), "/");

// Simulated user database
$users = [
    1 => ['name' => 'Alice', 'role' => 'admin'],
    2 => ['name' => 'Bob', 'role' => 'user'],
    3 => ['name' => 'Charlie', 'role' => 'user']
];

echo "<h1>Welcome, Bob!</h1>";
echo "<p>Select a user to view or edit their profile:</p>";

// List all users with view and edit links
foreach ($users as $id => $user) {
    echo "<p>
            <a href='view_profile.php?user_id=$id'>View Profile: {$user['name']}</a> | 
            <a href='edit_profile.php?user_id=$id'>Edit Profile: {$user['name']}</a>
          </p>";
}
?>
