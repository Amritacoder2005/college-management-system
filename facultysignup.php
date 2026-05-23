<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Faculty Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background: linear-gradient(135deg, #dbeafe, #f0f4ff);
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .container {
      background-color: white;
      padding: 40px 30px;
      width: 100%;
      max-width: 400px;
      border-radius: 15px;
      box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1);
      animation: slideIn 0.6s ease;
    }

    @keyframes slideIn {
      from {
        opacity: 0;
        transform: translateY(-30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    h2 {
      text-align: center;
      color: #0056b3;
      margin-bottom: 30px;
    }

    .form-group {
      position: relative;
      margin-bottom: 25px;
    }

    .form-group input {
      width: 100%;
      padding: 12px 40px 12px 12px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 1rem;
      transition: all 0.3s ease;
    }

    .form-group input:focus {
      border-color: #0056b3;
      box-shadow: 0 0 0 2px rgba(0, 86, 179, 0.2);
      outline: none;
    }

    .form-group label {
      display: block;
      margin-bottom: 6px;
      font-weight: 600;
      color: #333;
    }

    .form-group i {
      position: absolute;
      right: 12px;
      top: 38px;
      font-size: 1.2rem;
      color: #888;
      cursor: pointer;
    }

    #btn {
      width: 100%;
      padding: 12px;
      background-color: #0056b3;
      color: white;
      font-size: 1rem;
      font-weight: 600;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    #btn:hover {
      background-color: #003f8a;
    }

    p {
      margin-top: 20px;
      text-align: center;
      color: #333;
      font-size: 0.95rem;
    }

    p a {
      color: #0056b3;
      font-weight: 600;
      text-decoration: none;
    }

    p a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <div class="container">
    <h2>Faculty Login</h2>
    <form action="insertfacultylogin.php" method="post">
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="Email" id="email" required>
        <i class="bi bi-envelope"></i>
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="Password" id="password" required>
        <i class="bi bi-eye-slash" id="togglePassword"></i>
      </div>

      <input type="submit" value="Login" name="Submit" id="btn">

      <p>Go <a href="index.html">Back</a></p>
    </form>
  </div>

  <script>
    // Show/Hide Password Toggle
    const toggle = document.getElementById("togglePassword");
    const password = document.getElementById("password");

    toggle.addEventListener("click", function () {
      const type = password.getAttribute("type") === "password" ? "text" : "password";
      password.setAttribute("type", type);
      this.classList.toggle("bi-eye");
      this.classList.toggle("bi-eye-slash");
    });
  </script>

</body>
</html>
