<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Faculty Signup</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"/>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    * {
      box-sizing: border-box;
      font-family: 'Segoe UI', sans-serif;
    }

    body {
      margin: 0;
      padding: 0;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .container {
      max-width: 400px;
      background-color: rgba(0, 0, 0, 0.6);
      backdrop-filter: blur(12px);
      padding: 40px 30px;
      border-radius: 20px;
      color: white;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.4);
    }

    h2 {
      text-align: center;
      text-transform: uppercase;
      margin-bottom: 30px;
      font-weight: bold;
      color: #fff;
    }

    .form-group {
      position: relative;
      margin-bottom: 30px;
    }

    .form-group input {
      width: 100%;
      padding: 12px 10px;
      background: transparent;
      border: none;
      border-bottom: 2px solid #fff;
      color: #fff;
      font-size: 1rem;
    }

    .form-group input:focus {
      outline: none;
      border-bottom-color: #0dcaf0;
    }

    .form-group label {
      position: absolute;
      top: 12px;
      left: 10px;
      color: #ccc;
      transition: 0.3s ease;
      pointer-events: none;
    }

    .form-group input:focus + label,
    .form-group input:valid + label {
      top: -10px;
      font-size: 0.8rem;
      color: #0dcaf0;
    }

    #btn {
      width: 100%;
      padding: 12px;
      border-radius: 30px;
      border: none;
      font-size: 1.2rem;
      font-weight: bold;
      background-color: #0dcaf0;
      color: #000;
      transition: 0.3s ease;
    }

    #btn:disabled {
      background-color: #999;
      color: #333;
      cursor: not-allowed;
    }

    #btn:hover:enabled {
      background-color: #0bbcd4;
    }

    .back-btn {
      display: block;
      margin-top: 20px;
      text-align: center;
      text-decoration: none;
      color: #0dcaf0;
      font-weight: bold;
    }

    .back-btn:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <div class="container">
    <h2>Faculty Form</h2>
    <form action="insertfacultysignup.php" method="post">
      <div class="form-group">
        <input type="text" name="Name" id="name" required>
        <label for="name">Faculty Name</label>
      </div>
      <div class="form-group">
        <input type="number" name="number" id="number" required>
        <label for="number">Mobile Number</label>
      </div>
      <div class="form-group">
        <input type="email" name="Email" id="email" required>
        <label for="email">Email</label>
      </div>
      <div class="form-group">
        <input type="password" name="Password" id="password" required>
        <label for="password">Password</label>
      </div>

      <input type="submit" value="Submit" name="Submit" id="btn">

      <a href="facultydashboard.php" class="back-btn"><i class="bi bi-arrow-left-circle"></i> Back to Dashboard</a>
    </form>
  </div>
</body>
</html>
