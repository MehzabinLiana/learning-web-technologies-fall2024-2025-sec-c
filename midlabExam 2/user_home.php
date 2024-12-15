<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Home Page</title>
</head>
<body>
    
    <table width="100%" border="1" cellspacing="0" cellpadding="10" bgcolor="blue">
        <tr>
            <td align="center">
                <b>Users’ home page</b>
            </td>
        </tr>
    </table>

   
    <br><br>
    <table align="center" border="1" cellspacing="0" cellpadding="20">
        <tr>
            <td align="center">
                <h1>Welcome <?php echo $_SESSION['name'];?>!</h1>
                <p>
                    <a href="viewProfile.php">Profile</a><br>
                    <a href="changepass.php">Change Password</a><br>
                    <a href="logout.php">Logout</a>
                </p>
            </td>
        </tr>
    </table>
</body>
</html>