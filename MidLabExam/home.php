<?php
session_start();

if (!isset($_SESSION['logged_in'])) {
    header("Location: login.php");
    exit;
}

$username = $_SESSION['logged_in'];
$user_data = $_SESSION['users'][$username];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <h2>Welcome, <?php echo htmlspecialchars($user_data['name']); ?>!</h2>
    <p>Email: <?php echo htmlspecialchars($user_data['email']); ?></p>
    <p>Gender: <?php echo htmlspecialchars($user_data['gender']); ?></p>
    <p>Date of Birth: <?php echo htmlspecialchars($user_data['dob']); ?></p>

    <a href="logout.php">Logout</a>
</body>
</html>
