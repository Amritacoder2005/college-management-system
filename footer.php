<?php
if($_SERVER['REQUEST_METHOD']==='POST'){
include 'dbconnect.php';
$a= $_POST['Student_Name'];
$b= $_POST['Email'];
$c= $_POST['CR_number'];
$d= $_POST['Message'];
$e= $_POST['Experiance'];
$ins="INSERT INTO `feedback`(`Student_Name`, `Email`, `CR_number`, `Message`, `Experiance`) VALUES ('$a','$b','$c','$d','$e')";
if(mysqli_query($conn,$ins)){
    echo"<script>alert('Feedback is submitted'); window.location.href='feedback.php';</script>";
}
else{
  echo"try again";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT FEEDBACK</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        /* Resetting default styles */
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        /* Styling for header section */
        header {
            text-align: center;
            font-size: 35px;
            font-weight: bold;
            margin-top: 20px;
            color: #5C5C5C;
            animation: fadeIn 2s ease-in-out;
        }

        /* Animation for the header */
        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        /* Form styling */
        .form-container {
            width: 60%;
            margin: 50px auto;
            padding: 30px;
            border: 2px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fafafa;
            animation: slideIn 1.5s ease-in-out;
        }

        /* Animation for the form */
        @keyframes slideIn {
            0% { transform: translateY(50px); opacity: 0; }
            100% { transform: translateY(0); opacity: 1; }
        }

        .form-container input,
        .form-container textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-container input[type="radio"] {
            width: auto;
            display: inline-block;
        }

        .form-container textarea {
            height: 120px;
        }

        .form-container button {
            width: 100%;
            padding: 12px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form-container button:hover {
            background-color: #0056b3;
        }

        /* Footer Styling */
        footer {
            background-color: rgb(9, 61, 9);
            color: white;
            padding: 40px 0;
            animation: slideUp 2s ease-out;
        }

        /* Animation for footer */
        @keyframes slideUp {
            0% { transform: translateY(50px); opacity: 0; }
            100% { transform: translateY(0); opacity: 1; }
        }

        footer h3, footer h5, footer h6 {
            font-weight: 500;
        }

        footer .col-sm-4 img {
            width: 100%;
            max-width: 250px;
            margin: 20px 0;
        }

        footer iframe {
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 20px;
        }

        footer .marquee-text {
            font-size: 18px;
            text-align: center;
            padding: 10px;
        }

        /* Small screen responsiveness */
        @media (max-width: 768px) {
            .form-container {
                width: 90%;
            }

            footer iframe {
                width: 100%;
                height: 250px;
            }
        }
    </style>
</head>
<body>
    <!-- Top Information Row -->
    <div id="home">
  <div class="container-fluid">
    <!-- Navbar -->
        <?php require('header.php'); ?>

    <!-- Feedback Form Section -->
    <section class="container">
        <header>Feedback Form</header>
        <div class="form-container">
            <form method="POST">
                <label>Full Name</label>
                <input type="text" name="Student_Name" placeholder="Enter Full Name" required>

                <label>E-mail</label>
                <input type="email" name="Email" placeholder="Enter E-mail" required>

                <label>Cr No.</label>
                <input type="text" name="CR_number" placeholder="Enter Cr No" required>

                <label>Message</label>
                <textarea name="Message" placeholder="Enter your feedback here" required></textarea>

                <label>How do you rate overall experience?</label><br>
                <input type="radio" name="Experiance" value="Bad" id="Bad"> Bad
                <input type="radio" name="Experiance" value="Average" id="Average"> Average
                <input type="radio" name="Experiance" value="Good" id="Good"> Good
                <input type="radio" name="Experiance" value="Excellent" id="Excellent"> Excellent
             
                <button type="submit" name="submit">Submit Feedback</button>
            </form>
        </div>
    </section>

   <!--footer-->
       <?php require('footer.php'); ?>
</body>
</html>
