<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Job Portal Landing Page</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Your Custom CSS -->
  <link rel="stylesheet" href="landingdes.css">

  <style>
    html, body {
      height: 100%;
      margin: 0;
      display: flex;
      flex-direction: column;
    }

    .content {
      flex-grow: 1;
    }
  </style>
</head>
<body>

  <header class="bg-dark text-white py-3 px-4 d-flex justify-content-between align-items-center">
    <h1 class="m-0">JobPortal</h1>
    <nav>
      <a class="text-white mx-2 text-decoration-none" href="#features">Features</a>
      <a class="text-white mx-2 text-decoration-none" href="loginpage.php">Login</a>
      <a class="text-white mx-2 text-decoration-none" href="registerpage.php">Register</a>
    </nav>
  </header>

  <div class="content">
    <section class="hero text-center text-white d-flex flex-column justify-content-center align-items-center" style="background: url('https://via.placeholder.com/1200x400') center/cover no-repeat; height: 400px;">
      <h2 class="display-4 fw-bold">Find Your Dream Job Today</h2>
      <p class="lead">Join thousands of job seekers and employers connecting daily</p>
      <a class="btn btn-warning btn-lg mt-3" href="loginpage.php">Get Started</a>
    </section>

    <section id="features" class="features container py-5">
      <div class="row text-center">
        <div class="col-md-4 mb-4">
          <div class="p-4 bg-light rounded shadow-sm">
            <h3>For Job Seekers</h3>
            <p>Upload your resume and apply to jobs in just a few clicks.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="p-4 bg-light rounded shadow-sm">
            <h3>For Employers</h3>
            <p>Post job openings and find the perfect candidates easily.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="p-4 bg-light rounded shadow-sm">
            <h3>Simple & Free</h3>
            <p>No hidden fees. Easy to use for both clients and companies.</p>
          </div>
        </div>
      </div>
    </section>
  </div>

  <footer class="bg-dark text-white text-center py-3">
    <p class="mb-0">&copy; 2025 JobPortal. All rights reserved.</p>
  </footer>

  <!-- Bootstrap JS Bundle (optional for interactive components) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
