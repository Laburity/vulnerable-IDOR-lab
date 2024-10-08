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

// Check if the cookie user ID matches the target profile
if ($cookie_user_id == $target_user_id) {
    $user = $users[$target_user_id];

    // Process profile edit form
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $new_profile = $_POST['profile'];
        echo "<p>Profile updated for {$user['name']} to: $new_profile</p>";
    }

    // Display profile edit form
    echo "<h1>Editing Profile of {$user['name']}</h1>";
    echo "<form method='POST'>
            <textarea name='profile' rows='4' cols='50'>{$user['profile']}</textarea><br>
            <input type='submit' value='Update Profile'>
          </form>";
} else {
    // Display forbidden message if trying to edit another user's profile
    echo "<h1>Forbidden: You cannot edit this profile.</h1>";
}

echo "<a href='index.php'>Go Back</a>";
?>
