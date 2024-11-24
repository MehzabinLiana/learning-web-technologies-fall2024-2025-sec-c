
<?php
session_start();


if (!isset($_SESSION['users']) || empty($_SESSION['users'])) {
    echo "No registered users found.";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['pwd']);

    if (empty($email) || empty($password)) {
        echo "Email and password are required.";
        exit();
    }

    // Validate user 
    $is_valid_user = false;
    foreach ($_SESSION['users'] as $user) {
        if ($user['email'] === $email && $user['pwd'] === $password) {
            $_SESSION['logged_in_user'] = $email; 
            $_SESSION['xyz'] = true; 
            $is_valid_user = true;
            break;
        }
    }

    if ($is_valid_user) {
        header("Location: Home.php"); 
        exit();
    } else {
        echo "Invalid email or password.";
    }
} else {
    header("Location: Login.html"); 
    exit();
}
?>
