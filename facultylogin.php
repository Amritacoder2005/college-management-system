<?php
session_start();
if (!isset($_SESSION['username']) || !isset($_SESSION['email'])) {
    header("Location: facultylogin.php");
    exit();
}
$username = $_SESSION['username'];
$email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Faculty Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f1f5f9;
      margin-bottom: 80px;
    }

    .navbar {
      background-color:rgb(69, 186, 15);
    }

    .navbar .nav-link {
      color: white !important;
    }

    .navbar .nav-link:hover {
      background-color:rgb(35, 115, 51);
      border-radius: 5px;
    }

    .welcome-banner {
      background: linear-gradient(90deg, #0d6efd, #0dcaf0);
      color: white;
      padding: 20px;
      text-align: center;
      font-size: 1.1rem;
      animation: fadeIn 1s ease-in-out;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(-15px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .card {
      border: none;
      border-radius: 15px;
      background: linear-gradient(145deg, #e0f7fa, #b2ebf2);
      color: #111;
      transition: all 0.3s ease;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }

    .card-body {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 25px;
    }

    .card-title a {
      text-decoration: none;
      color: #0d6efd;
      font-size: 1.1rem;
      font-weight: 600;
    }

    .card-title a:hover {
      color: #0a58ca;
    }

    .card i {
      font-size: 2rem;
      margin-bottom: 10px;
      color: #0d6efd;
    }

    .footer {
      background-color: #212529;
      color: white;
      text-align: center;
      padding: 20px 10px;
      position: fixed;
      bottom: 0;
      left: 0;
      right: 0;
      width: 100%;
    }

    h1 {
      margin-top: 30px;
      text-align: center;
      font-weight: bold;
      color: #333;
    }

    @media (max-width: 768px) {
      .card-title a {
        font-size: 1rem;
      }
    }
  </style>
</head>
<body>

<!-- Welcome Banner -->
<div class="welcome-banner">
  👋 Welcome, <?php echo htmlspecialchars($username); ?> <br>
  📧 Email: <?php echo htmlspecialchars($email); ?>
</div>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="img1.png" width="180" height="50" alt="Logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" href="index.html">🏠 Home</a></li>
      </ul>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="logout.php"><i class="bi bi-box-arrow-right"></i> Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Page Title -->
<h1>Faculty Dashboard</h1>

<!-- Card Grid -->
<div class="container mt-4">
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card text-center">
        <div class="card-body">
          <i class="bi bi-person-plus-fill"></i>
          <h5 class="card-title"><a href="facultysignup.php">Add Faculty</a></h5>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card text-center">
        <div class="card-body">
          <i class="bi bi-person-badge-fill"></i>
          <h5 class="card-title"><a href="admission.php">New Admission</a></h5>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card text-center">
        <div class="card-body">
          <i class="bi bi-person-lines-fill"></i>
          <h5 class="card-title"><a href="showfaculty.php">Show Faculty</a></h5>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card text-center">
        <div class="card-body">
          <i class="bi bi-people-fill"></i>
          <h5 class="card-title"><a href="showstudent.php">Show Student</a></h5>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card text-center">
        <div class="card-body">
          <i class="bi bi-journal-plus"></i>
          <h5 class="card-title"><a href="addcourse.php">Add Course</a></h5>
        </div>
      </div>
    </div>
      <div class="col">
      <div class="card text-center">
        <div class="card-body">
          <i class="bi bi-person-hearts"></i>
          <h5 class="card-title"><a href="show_studentfeedback.php">Student Feedbacks</a></h5>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<div class="footer">
  <p>© 2024 Maharani Lal Kunwari, MLK (PG) College | All rights reserved</p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
