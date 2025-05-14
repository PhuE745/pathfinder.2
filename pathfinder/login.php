<?php
// Database connection details
$servername = "localhost";
$username = "root"; // Update with your database username
$password = ""; // Update with your database password
$dbname = "pathfinder.2"; // Update with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $userPassword = $_POST['password'];

    // Prepare and execute the SQL query
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email); // "s" means string
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the email exists in the database
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Verify the password (Assuming passwords are stored hashed)
        if (password_verify($userPassword, $row['password'])) {
            // Login successful, start session and redirect
            session_start(); // Start session
            $_SESSION['user_id'] = $row['id']; // Store user ID or any other info you need
            $_SESSION['email'] = $row['email']; // Store email

            echo "Login successful! Redirecting...";
            header("Location: dashboard.php");
            exit; // Always call exit after header redirect
        } else {
            // Incorrect password
            echo "Invalid password.";
        }
    } else {
        // Email not found
        echo "No account found with that email.";
    }

    // Close the connection
    $stmt->close();
    $conn->close();
}
?>
