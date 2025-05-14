<?php
session_start();
include 'connection.php'; // Your database connection file

$username = $_POST['username'];
$password = $_POST['password'];

// Query to check user
$sql = "SELECT * FROM users WHERE username = ? LIMIT 1";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['role'] = $user['role'];

    // Redirect based on role
    switch ($user['role']) {
        case 'admin':
            header("dashboardadmin.php");
            break;
        case 'employer':
            header("dashboardhire.php");
            break;
              case 'client':
            header("dashboardclient.php");
            break;
        default:
            header("Location: /login.php?error=role_not_found");
            break;
    }
    exit();
} else {
    header("Location: /login.php?error=invalid_credentials");
    exit();
}
?>
