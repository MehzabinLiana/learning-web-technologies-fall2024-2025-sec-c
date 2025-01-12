
<?php
session_start();

// Check login
if (!isset($_SESSION['employer_id'])) {
    header("Location: login.html"); 
    exit;
}


$employer_name = $_SESSION['employer_name'];
$company_name = $_SESSION['company_name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Dashboard</title>
</head>
<body>
    <h1>Welcome, <?php echo htmlspecialchars($employer_name); ?>!</h1>
    <p>Company Name: <?php echo htmlspecialchars($company_name); ?></p>
    <a href="logout.php">Logout</a>
</body>
</html>
