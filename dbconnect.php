<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Us</title>

  <!-- Bootstrap CSS & Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <style>
    #a {
      color: white;
      text-align: center;
      text-decoration: underline;
      background-image: url("contact us.webp");
      background-size: cover;
      background-position: center;
      height: 90px;
      line-height: 90px;
      font-size: 2rem;
    }

    #myBtn {
      display: none;
      position: fixed;
      bottom: 20px;
      right: 30px;
      z-index: 99;
      border: none;
      outline: none;
      background-color: red;
      color: white;
      cursor: pointer;
      padding: 15px;
      border-radius: 10px;
      font-size: 25px;
    }

    #myBtn:hover {
      background-color: #555;
    }
  </style>
</head>
<body>
  <div class="container-fluid p-0">
    <!-- Navbar -->
    <?php require('header.php'); ?>

    <!-- Page Heading -->
    <div class="container-fluid">
      <h1 id="a">Contact Us</h1>
    </div>

   <!-- Contact Info Cards -->
<div class="container py-5">
  <div class="row g-4 text-center">
    <!-- Address -->
    <div class="col-sm-6 col-md-3">
      <div class="card h-100 border-0 shadow-lg contact-card hover-effect">
        <div class="card-body">
          <i class="bi bi-geo-alt-fill fs-2 text-primary mb-3"></i>
          <h5 class="card-title fw-semibold">Address</h5>
          <p class="card-text small">
            Maharani Lal Kunwari (P.G.) College,<br>
            Tulsipur Road, Balrampur, UP - 271201
          </p>
        </div>
      </div>
    </div>

    <!-- Email -->
    <div class="col-sm-6 col-md-3">
      <div class="card h-100 border-0 shadow-lg contact-card hover-effect">
        <div class="card-body">
          <i class="bi bi-envelope-fill fs-2 text-danger mb-3"></i>
          <h5 class="card-title fw-semibold">Email</h5>
          <p class="card-text small">
            <a href="mailto:mlk.college1955@gmail.com" class="text-decoration-none">mlk.college1955@gmail.com</a>
          </p>
        </div>
      </div>
    </div>

    <!-- Mobile -->
    <div class="col-sm-6 col-md-3">
      <div class="card h-100 border-0 shadow-lg contact-card hover-effect">
        <div class="card-body">
          <i class="bi bi-phone-fill fs-2 text-success mb-3"></i>
          <h5 class="card-title fw-semibold">Mobile</h5>
          <p class="card-text small">
            <a href="tel:+919792397315" class="text-decoration-none">+91 9792397315</a>
          </p>
        </div>
      </div>
    </div>

    <!-- Phone -->
    <div class="col-sm-6 col-md-3">
      <div class="card h-100 border-0 shadow-lg contact-card hover-effect">
        <div class="card-body">
          <i class="bi bi-telephone-fill fs-2 text-warning mb-3"></i>
          <h5 class="card-title fw-semibold">Phone</h5>
          <p class="card-text small">
            <a href="tel:05263-234139" class="text-decoration-none">05263-234139</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>


    <!-- Contact Form -->
    <!-- Contact Form -->
    <div class="container mb-5">
      <div class="card shadow p-4">
        <h4 class="mb-4 text-primary">Send Us a Message</h4>
        <form action="https://api.web3forms.com/submit" method="POST">
          <input type="hidden" name="access_key" value="047a6b04-e79d-4a86-a7c7-b8c9eb810a58">
          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label">Name</label>
              <input type="text" class="form-control" name="name" placeholder="Enter name" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Email</label>
              <input type="email" class="form-control" name="email" placeholder="Enter email" required>
            </div>
            <div class="col-12">
              <label class="form-label">Message</label>
              <textarea class="form-control" name="message" rows="4" placeholder="Your message here..." required></textarea>
            </div>
            <div class="col-12 text-end">
              <button type="submit" class="btn btn-primary me-2">Submit</button>
              <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- Footer -->
    <?php require('footer.php'); ?>
  </div>
</body>
</html>
