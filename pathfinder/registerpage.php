<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="registerdes.css">

</head>
<body>
    <div class="form-container">
        <h2>Register</h2>
        <form action="register.php" method="POST">
            <!-- User Info Section -->
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <!-- Role Selection -->
            <label class="role-label" for="role">Select Role:</label>
            <select id="role" name="role" required>
                <option value="client">Client</option>
                <option value="employer">Employer</option>
                <option value="admin">Admin</option>
            </select>

            <input type="submit" value="Register">
        </form>
    </div>
</body>
</html>
