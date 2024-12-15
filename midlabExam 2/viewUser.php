<?php
session_start();

// Check if the user is logged in and has admin privileges
if (!isset($_SESSION['id']) || $_SESSION['type'] !== 'Admin') {
    header("Location: login.php");
    exit();
}

// Path to the users.txt file
$file_path = "users.txt";

// Read the users.txt file
if (file_exists($file_path)) {
    $users = file($file_path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
} else {
    die("Error: Users file not found.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Users</title>
</head>
<body>
    <!-- Users Table -->
    <table border="1" cellspacing="0" cellpadding="10" align="center">
        <tr>
            <th colspan="3" align="center">Users</th>
        </tr>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>USER TYPE</th>
        </tr>
        <?php
        // Displaying each user in a table row
        foreach ($users as $user) {
            list($id, $password, $name, $type) = explode(',', $user);
            echo "<tr>
                    <td>$id</td>
                    <td>$name</td>
                    <td>$type</td>
                  </tr>";
        }
        ?>
        <tr>
            <td colspan="3" align="center">
                <a href="admin_home.php">Go Home</a>
            </td>
        </tr>
    </table>
</body>
</html>