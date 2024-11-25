<?php
session_start();

if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];

    if ($password !== $confirm_password) {
        echo "Passwords do not match! <a href='c.php'>Go Back</a>";
        exit;
    }

    if (isset($_SESSION['users'][$username])) {
        echo "Username already exists! <a href='registration.php'>Go Back</a>";
        exit;
    }

    $_SESSION['users'][$username] = [
        'name' => $name,
        'email' => $email,
        'password' => $password,
        'gender' => $gender,
        'dob' => $dob
    ];

    echo "Registration successful! <a href='login.php'>Go to Login</a>";
    exit;
}
?>