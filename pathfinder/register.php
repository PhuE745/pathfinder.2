<?php
// register.php

// Database credentials
$host = 'localhost';  
$dbname = 'pathfinder.2';  
$username = 'root';  
$password = '';  

// Create a new PDO instance to connect to the database
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}

// Process form data when the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullname = trim($_POST['fullname']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $role = $_POST['role'];

    // Input validation
    if (empty($fullname) || empty($email) || empty($password) || empty($role)) {
        echo "Please fill in all fields.";
        exit;
    }

    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert user data into the database
    $sql = "INSERT INTO users (fullname, email, password, role) VALUES (:fullname, :email, :password, :role)";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':fullname', $fullname);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $hashed_password);
    $stmt->bindParam(':role', $role);

    try {
        $stmt->execute();
        echo "User successfully registered.";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
