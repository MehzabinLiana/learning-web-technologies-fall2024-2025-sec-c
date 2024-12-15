<?php
session_start();

// Check if user login
if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit();
}

//  user details from session
$id = $_SESSION['id'];
$name = $_SESSION['name'];
$type = $_SESSION['type'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Profile</title>
</head>
<body>
    <!-- Profile Table -->
    <table border="1" cellspacing="0" cellpadding="10" align="center">
        <tr>
            <th colspan="2" align="center">Profile</th>
        </tr>
        <tr>
            <td><b>ID</b></td>
            <td><?php echo $id; ?></p></td>
        </tr>
        <tr>
            <td><b>NAME</b></td>
            <td><?php echo $name; ?></p></td>
        </tr>
        <tr>
            <td><b>USER TYPE</b></td>
            <td><?php echo $type; ?></p></td>
        </tr>
        <tr>
            <td colspan="2" align="right">
                <a href="<?php echo ($type === 'Admin' ? 'admin_home.php' : 'user_home.php')?>" style="text-decoration:none; color:blue;">Go Home</a>
            </td>
        </tr>
    </table>
</body>
</html>