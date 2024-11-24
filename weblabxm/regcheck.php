<?php
session_start();


if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = []; 
}


if (isset($_POST['name'], $_POST['email'], $_POST['dob'], $_POST['gender'], $_POST['pwd'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $password = $_POST['pwd'];

    // Store data in sessionarray
    $new_user = [
        'name' => $name,
        'email' => $email,
        'dob' => $dob,
        'gender' => $gender,
        'pwd' => $password
    ];

    $_SESSION['users'][] = $new_user; // Add new user

    
    header("Location: home.php");
    exit();
} else {
    
    header("Location: reg.html");
    exit();
}
?>