<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - Job Portal</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="logindes.css">
  <!-- Custom Styles -->
</head>
<body>

  <div class="login-container">
    <div class="logo">
      <!-- Insert your logo here -->
      <img src="https://via.placeholder.com/80" alt="JobPortal Logo">
    </div>

    <h2>Welcome Back</h2>
    <form action="login.php" method="POST">
      <div class="mb-3">
        <label for="email" class="form-label">Email Address</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
      </div>

      <button type="submit" class="btn-login">Login</button>

      <div class="footer">
        <p>Don't have an account? <a href="register.html">Sign up</a></p>
        <p><a href="#">Forgot Password?</a></p>
      </div>
    </form>
  </div>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
