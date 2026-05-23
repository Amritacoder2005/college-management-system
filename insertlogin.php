<?php

$conn= mysqli_connect("localhost","root","","college");
$a= $_POST['Name'];
$b= $_POST['number'];
$c= $_POST['Email'];
$d= $_POST['Password'];
$ins="INSERT INTO `faculty signup`(`Name`, `Mobile_number`, `Email`, `Password`) VALUES ('$a','$b','$c','$d')";
if(mysqli_query($conn,$ins))
{
    header("Location: facultylogin.php");
}
else{
    echo"<script>alert('Try again'); window.location.href='facultysignup.php';</script>";
}

?>