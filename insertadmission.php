<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MLK PG COLLEGE BALRAMPUR</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
       #news{
        background-color:#f0f0f0;
        font-weight: bold;
        text-align: center;
        border:1px solid red;
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
<body class="bg-light">
  
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-success sticky-top shadow">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="img1.png" alt="Logo" width="160" height="40" class="d-inline-block align-text-top">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
              <li class="nav-item"><a class="nav-link active" href="#about">About</a></li>
              <li class="nav-item"><a class="nav-link active" href="#s1">Students</a></li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="#" id="coursesDropdown" role="button" data-bs-toggle="dropdown">
                  Courses
                </a>
                <ul class="dropdown-menu dropdown-menu-dark">
                  <li><a class="dropdown-item" href="undergraduate.php">Undergraduate (UG)</a></li>
                  <li><a class="dropdown-item" href="postgraduate.php">Postgraduate (PG)</a></li>
                </ul>
              </li>


              <li class="nav-item"><a class="nav-link active" href="contact.php">Contact</a></li>
              <li class="nav-item"><a class="nav-link active" href="feedback.php">Feedback</a></li>
              <li class="nav-item"><a class="nav-link active" href="facultylogin.php">Admin</a></li>
            </ul>
          </div>
        </div>
      </nav>



      <!--slider start-->
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="slider1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="slider2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="slider3.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="slider4.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="slider6.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="slider5.png" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>
      <br>
      <!--card start-->
       <div class="container py-4">
          <div class="row justify-content-center">
            
            <!-- Card 1 -->
            <div class="col-12 col-md-6 col-lg-5 mb-4 d-flex justify-content-center">
              <div class="card shadow-sm rounded" style="width: 100%; max-width: 20rem;">
                <img src="card1.jpg" class="card-img-top" alt="Founder Image">
                <div class="card-body text-center">
                  <h5 class="card-title text-danger fw-bold">Maharaja Jayendra Pratap Singh</h5>
                  <p class="card-text">Founder, President</p>
                </div>
              </div>
            </div>

            <!-- Card 2 -->
            <div class="col-12 col-md-6 col-lg-5 mb-4 d-flex justify-content-center">
              <div class="card shadow-sm rounded" style="width: 100%; max-width: 20rem;">
                <img src="card2.jpg" class="card-img-top" alt="Principal Image">
                <div class="card-body text-center">
                  <h5 class="card-title text-danger fw-bold">Prof. Janardan Prasad Pandey</h5>
                  <p class="card-text">Principal</p>
                </div>
              </div>
            </div>

          </div>
       </div>

      <br>
      <div id="about" class="py-5">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
              <div class="card shadow-sm border-0 rounded overflow-hidden" style="transition: transform 0.3s;">
                <img src="box1.jpg" class="card-img-top" alt="College Image" style="object-fit: cover; height: 250px;">
                <div class="card-body">
                  <h5 class="text-danger text-center text-decoration-underline mb-4">
                    About the Maharani Lal Kunwari College
                  </h5>
                  <p class="card-text text-justify">
                    When our nation, after getting freedom, was stepping towards education and technique, the Tarai skirt of the biggest province, Uttar Pradesh, was lagging behind due to lack of any higher educational institution. A vast area between Gorakhpur and Lucknow was lying like a desert in the field of education.
                    <br><br>
                    At such a time the saintly Maharaja of Balrampur Sri Pateshwari Prasad Singh so kindly created an oasis for higher academic achievement by establishing M.L.K. College in 1955 in the pious memory of his reverend mother which covered the area of Gonda, Bahraich and Basti.
                  </p>
                  <div class="text-center mt-4">
                    <a href="about.php" class="btn btn-info px-4">Read More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    <br>
    <!--student corner-->
        <div id="s1" class="py-5">
          <div class="container">
            <h1 class="text-center text-danger text-decoration-underline mb-5">STUDENTS</h1>
            
            <div class="row g-4 justify-content-center">

              <!-- Card 1 -->
              <div class="col-12 col-sm-6 col-lg-3 d-flex justify-content-center">
                <div class="card shadow-sm border-0" style="width: 100%; max-width: 16rem; transition: transform 0.3s;">
                  <img src="student1.webp" class="card-img-top mt-3" alt="Examination Schedule" style="height: 200px; object-fit: cover;">
                  <div class="card-body text-center">
                    <a href="https://suksn.edu.in/announcements.aspx" class="btn btn-primary w-100">EXAMINATION SCHEDULE</a>
                  </div>
                </div>
              </div>

              <!-- Card 2 -->
              <div class="col-12 col-sm-6 col-lg-3 d-flex justify-content-center">
                <div class="card shadow-sm border-0" style="width: 100%; max-width: 16rem; transition: transform 0.3s;">
                  <img src="student2.jpg" class="card-img-top mt-3" alt="Online Exam Form" style="height: 200px; object-fit: cover;">
                  <div class="card-body text-center">
                    <a href="https://www.suksn.edu.in/StudentsCorner.aspx" class="btn btn-primary w-100">ONLINE EXAM FORM</a>
                  </div>
                </div>
              </div>

              <!-- Card 3 -->
              <div class="col-12 col-sm-6 col-lg-3 d-flex justify-content-center">
                <div class="card shadow-sm border-0" style="width: 100%; max-width: 16rem; transition: transform 0.3s;">
                  <img src="s3.webp" class="card-img-top mt-3" alt="Result" style="height: 200px; object-fit: cover;">
                  <div class="card-body text-center">
                    <a href="http://erp.suksn.in/SID_All_Results.aspx" class="btn btn-primary w-100">RESULT</a>
                  </div>
                </div>
              </div>

              <!-- Card 4 -->
              <div class="col-12 col-sm-6 col-lg-3 d-flex justify-content-center">
                <div class="card shadow-sm border-0" style="width: 100%; max-width: 16rem; transition: transform 0.3s;">
                  <img src="s4.webp" class="card-img-top" alt="Placement Cell mt-3" style="height: 200px; object-fit: cover;">
                  <div class="card-body text-center">
                    <a href="placement.php" class="btn btn-primary w-100">PLACEMENT CELL</a>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

    <br>
        <!-- NEWS AND ANNOUNCEMENTS -->
        <div class="container py-5">
          <h2 class="text-center text-danger text-decoration-underline mb-4">NEWS AND ANNOUNCEMENT</h2>

          <div class="row justify-content-center">
            <div class="col-md-8">

              <!-- Auto-scroll container -->
              <div class="border rounded shadow-sm overflow-hidden bg-danger" style="height: 250px; position: relative;">
                <!-- Marquee for news announcements -->
                  <marquee direction="up" onmouseover="this.stop()" onmouseout="this.start()" height="250px">
                    <div class="list-group">
                      <a href="https://mlkcollege.ac.in/wp-content/uploads/2024/07/Admission-Class-Notice.pdf" target="_blank" class="list-group-item list-group-item-action">
                        <i class="bi bi-megaphone-fill text-primary me-2"></i> Notice about Admission & Class <span class="float-end text-muted small">19/07/2024</span>
                      </a>
                      <a href="https://mlkcollege.ac.in/wp-content/uploads/2024/07/Notice-Tobacco.pdf" target="_blank" class="list-group-item list-group-item-action">
                        <i class="bi bi-megaphone-fill text-primary me-2"></i> Tobacco Free Campus Notice <span class="float-end text-muted small">12/07/2024</span>
                      </a>
                      <a href="https://mlkcollege.ac.in/wp-content/uploads/2024/06/YOGA-DAY-NOTICE.pdf" target="_blank" class="list-group-item list-group-item-action">
                        <i class="bi bi-megaphone-fill text-primary me-2"></i> International Yoga Day Notice <span class="float-end text-muted small">12/06/2024</span>
                      </a>
                      <a href="https://mlkcollege.ac.in/wp-content/uploads/2024/06/UG-Admission-Notice-2024-25.pdf" target="_blank" class="list-group-item list-group-item-action">
                        <i class="bi bi-megaphone-fill text-primary me-2"></i> UG Admission Notice 2024-25 <span class="float-end text-muted small">06/06/2024</span>
                      </a>
                      <a href="https://mlkcollege.ac.in/wp-content/uploads/2024/05/IMG-20240503-WA0035.jpg" target="_blank" class="list-group-item list-group-item-action">
                        <i class="bi bi-megaphone-fill text-primary me-2"></i> Journalism & Mass Communication <span class="float-end text-muted small">03/05/2024</span>
                      </a>
                      </div>
                   </marquee>

              </div>

            </div>
          </div>
        </div>
        <!-- footer -->
        <!-- Footer -->
      <div class="container-fluid" style="background-color: rgb(9, 61, 9); color: white; padding-top: 20px; padding-bottom: 20px;">
          <div class="row">
              <!-- Left Section: Contact Info -->
              <div class="col-sm-4 d-flex flex-column align-items-start">
                  <img src="project.png" alt="" style="max-width: 100%; margin-bottom: 15px;">
                  <h5><i class="bi bi-geo-alt-fill"></i> Tulsipur Road, Balrampur (UP) - 271201</h5>
                  <h5><i class="bi bi-telephone"></i> +91-97923 97315</h5>
                  <h3>Last updated on</h3>
                  <h6>July 22, 2024 at 5:30 am</h6>
              </div>

              <!-- Middle Section: Google Map -->
              <div class="col-sm-4">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3541.2393722476563!2d82.18952907531357!3d27.430649776342275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3999d8ca37dfbdaf%3A0xc73a0b84b63d8a1f!2sM.L.K.%20P.G%20College!5e0!3m2!1sen!2sin!4v1721200866200!5m2!1sen!2sin" 
                  width="100%" height="300" style="border: 1px solid black;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>

              <!-- Right Section: Social Media or Additional Information (Optional) -->
              <div class="col-sm-4 d-flex flex-column align-items-start">
                  <h5><i class="bi bi-facebook"></i> Facebook</h5>
                  <h5><i class="bi bi-twitter"></i> Twitter</h5>
                  <h5><i class="bi bi-instagram"></i> Instagram</h5>
                  <h5><i class="bi bi-linkedin"></i> LinkedIn</h5>
              </div>
          </div>

          <!-- Footer Bottom Section with Animation -->
          <div class="row mt-3">
              <div class="col-12 text-center">
                  <div class="alert alert-info" role="alert">
                      <strong>© 2024 Maharani Lal Kunwari, MLK (PG) College</strong>
                  </div>
              </div>
          </div>
        </div>
  
</body>  
</html>